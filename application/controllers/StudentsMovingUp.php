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
        $result = $this->Main_model->get("sections", 'id');

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
                "<button type='button' class='btn green approve' value='" . $buttonValue . "'><i class='fa fa-eye'></i></button>";

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
}
