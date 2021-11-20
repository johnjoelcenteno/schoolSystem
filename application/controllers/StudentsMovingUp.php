<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StudentsMovingUp extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
        $this->load->model('Credentials_model');
    }

    public function index()
    {
        $params['viewName'] = 'MovingUp/index';
        $params['pageTitle'] = 'Manage students moving up';
        $params['renderedData'] = array();

        $this->load->library('view_manipulation', $params);
        $this->view_manipulation->renderViewWithLayout();
    }

    function determineIfSectionHasStudentsWithRemarks($sectionId)
    {
        $studentsInSection = $this->Main_model->get_where('students', 'section_id', $sectionId)->result();

        $studentsWithRemarks = array();
        $sectionHasRemarks = false;
        foreach ($studentsInSection as $row) {

            $studentsMovingUpTable = $this->Main_model->get_where("students_moving_up", "student_id", $row->id)->result();
            $studentFullName = $row->firstname . ' ' . $row->middlename . ' ' . $row->lastname;

            foreach ($studentsMovingUpTable as $row) {

                $studentInfo['studentFullName'] = $studentFullName;
                $studentInfo['studentId'] = $row->student_id;

                if ($row->number_of_remarks != 0) {
                    array_push($studentsWithRemarks, $studentInfo);
                    $sectionHasRemarks = true;
                };
            }
        }

        return array(
            "studentsWithRemarks" => json_encode($studentsWithRemarks),
            "status" => $sectionHasRemarks
        );
    }

    public function getAllSectionsForTable()
    {
        $result = $this->Main_model->get_where("sections", 'section_is_cleared', 0);

        $counter = 0;
        foreach ($result->result() as $row) {
            $counter++;

            $sectionHasStudentsWithRemarks = $this->determineIfSectionHasStudentsWithRemarks($row->id);
            $studentsWithRemarks = $sectionHasStudentsWithRemarks['studentsWithRemarks'];
            $sectionHasStudentWithRemarks = $sectionHasStudentsWithRemarks['status'];

            $buttonValue = json_encode(array(
                "id" => $row->id,
                "section_name" => $row->section_name,
                "students_with_remarks" => $studentsWithRemarks
            ));

            $actionButton = $sectionHasStudentWithRemarks ?  "<button type='button' class='btn blue view' value='" . $buttonValue . "'><i class='fa fa-eye'></i></button>" :
                "<button type='button' class='btn green approve' value='" . $buttonValue . "'><i class='fa fa-check'></i></button>";

            echo '
                <tr>
                    <td>
                        ' . $counter . '
                    </td>
                    <td>
                        ' . $row->section_name . '
                    </td>
                    <td>
                        ' . $actionButton . '
                    </td>
                </tr>
            ';
        }
    }

    public function getRemarksByStudentIdReturnTable()
    {
        $studentId = $this->input->post("student_id");
        $remarksTable = $this->Main_model->get_where("remarks", "student_id", $studentId);

        $counter = 0;
        $htmlTbodyData = "";
        foreach ($remarksTable->result() as $row) {
            $counter++;

            $subjectName = $this->Main_model->get_where("subjects", "id", $row->subject_id)->row()->subject_name;
            $teacherName = $this->Main_model->getFullName('teachers', 'id', $row->teacher_id);

            $htmlTbodyData .= '
                <tr>
                    <td>' . $counter . '</td>
                    <td>' . $subjectName . '</td>
                    <td>' . $teacherName . '</td>
                    <td>' . $row->remarks . '</td>
                    <td>
                        <button class="btn green resolve" value="' . $row->id . '">Resolve</button>
                    </td>
                </tr>
            ';
        }

        $studentName = $this->Main_model->getFullName("students", "id", $studentId);

        echo json_encode(array(
            "htmlTbodyData" => $htmlTbodyData,
            "studentFullname" => $studentName
        ));
    }

    public function resolveRemarks()
    {
        $remarkId = $this->input->post('remark_id');
        $studentId = $this->input->post('student_id');

        $this->Main_model->_delete("remarks", "id", $remarkId);

        $remarksTable = $this->Main_model->get_where("remarks", "id", $studentId)->result_array();

        $update['number_of_remarks'] = count($remarksTable);

        $this->Main_model->_update("students_moving_up", "student_id", $studentId, $update);

        $section_id = $this->Main_model->get_where("students", "id", $studentId)->row()->section_id;

        $returnData['remaining_remarks'] = $update['number_of_remarks'];
        $returnData['section_id'] = $section_id;
        $returnData['setion_remaning_students_with_remarks'] = $this->determineIfSectionHasStudentsWithRemarks($section_id);

        echo json_encode($returnData);
    }

    public function clearSection()
    {
        $sectionId = $this->input->post('section_id');

        $update['section_is_cleared'] = 1;
        $this->Main_model->_update("sections", "id", $sectionId, $update);

        $this->db->truncate('teacher_loads');
        $this->db->truncate('advisers');

        $studentsTable = $this->Main_model->get("students", "id");
        foreach ($studentsTable->result() as $row) {
            $studentUpdate['section_id'] = 0;

            $this->Main_model->_update("students", "id", $row->id, $studentUpdate);
        }
        echo "nag update na ako sectionId: $sectionId";
    }
}
