<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grades extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
        $this->load->model('Credentials_model');
    }

    public function index()
    {
        $data['subjectId'] = $this->input->get("subjectId");
        $data['gradeLevel'] = $this->input->get("gradeLevel");
        $data['sectionId'] = $this->input->get("sectionId");
        $data['sectionName'] = $this->Main_model->get_where("sections", "id", $data['sectionId'])->row()->section_name;
        $data['subjectName'] = $this->Main_model->get_where("subjects", "id", $data['subjectId'])->row()->subject_name;

        $this->load->view("components/includes/header");
        $this->load->view('components/teacher_management/manage_grades', $data);
    }

    function determineGradeRecordIfPresent($studentId, $subjectId, $sectionId, $gradeLevel)
    {
        $where['student_id'] = $studentId;
        $where['subject_id'] = $subjectId;
        $where['section_id'] = $sectionId;
        $where['grade_level'] = $gradeLevel;
        $where['year'] = date("Y");
        return count($this->Main_model->multiple_where("grades", $where)->result_array()) == 0 ? false : true;
    }

    // START COMMANDS
    public function textGradeToParent($studentId, $firstQuarter, $secondQuarter, $thirdQuarter, $fourthQuarter, $subjectId)
    {
        $studentTable = $this->Main_model->get_where("students", "id", $studentId)->row();
        $parentName = $studentTable->parent_fullname;
        $parentNumber = $studentTable->parent_contact_number;

        $firstQuarter = $firstQuarter == null ? "" : $firstQuarter;
        $secondQuarter = $secondQuarter == null ? "" : $secondQuarter;
        $thirdQuarter = $thirdQuarter == null ? "" : $thirdQuarter;
        $fourthQuarter = $fourthQuarter == null ? "" : $fourthQuarter;

        $subjectName = $this->Main_model->get_where("subjects", "id", $subjectId)->row()->subject_name;

        $message = "Subject name: $subjectName 1stQ: $firstQuarter, 2ndQ: $secondQuarter, 3rdQ: $thirdQuarter, 4thQ: $fourthQuarter";
        $this->Main_model->SendTextWithNumberAndMessage($parentNumber, $message);
    }

    public function createOrUpdate()
    {
        $studentId = $this->input->post("student_id");
        $subjectId = $this->input->post("subject_id");
        $sectionId = $this->input->post("section_id");
        $gradeLevel = $this->input->post("grade_level");

        // determine if record is already present
        if ($this->determineGradeRecordIfPresent($studentId, $subjectId, $sectionId, $gradeLevel)) { // update
            $gradeId = $this->Main_model->multiple_where("grades", array(
                "student_id" => $studentId,
                "subject_id" => $subjectId,
                "section_id" => $sectionId,
                "year" => date("Y")
            ))->row()->id;

            $update['student_id'] = $studentId;
            $update['first_quarter'] = $this->input->post("first_quarter");
            $update['second_quarter'] = $this->input->post("second_quarter");
            $update['third_quarter'] = $this->input->post("third_quarter");
            $update['fourth_quarter'] = $this->input->post("fourth_quarter");
            $update['subject_id'] = $subjectId;
            $update['section_id'] = $sectionId;
            $update['grade_level'] = $gradeLevel;
            $update['year'] = date("Y");
            $update['isSeniorHigh'] = $gradeLevel >= 11 ? true : false;

            $this->Main_model->_update("grades", "id", $gradeId, $update);

            $this->textGradeToParent($studentId, $update['first_quarter'], $update['second_quarter'], $update['third_quarter'], $update['fourth_quarter'], $subjectId);
        } else { // create
            $insert['student_id'] = $studentId;
            $insert['first_quarter'] = $this->input->post("first_quarter");
            $insert['second_quarter'] = $this->input->post("second_quarter");
            $insert['third_quarter'] = $this->input->post("third_quarter");
            $insert['fourth_quarter'] = $this->input->post("fourth_quarter");
            $insert['subject_id'] = $subjectId;
            $insert['section_id'] = $sectionId;
            $insert['grade_level'] = $gradeLevel;
            $insert['year'] = date("Y");
            $insert['isSeniorHigh'] = $gradeLevel >= 11 ? true : false; // either 1 or 0 

            $this->Main_model->_insert("grades", $insert);
            $this->textGradeToParent($studentId, $insert['first_quarter'], $insert['second_quarter'], $insert['third_quarter'], $insert['fourth_quarter'], $subjectId);
        }
    }

    public function delete()
    {
        $id = $this->input->get("id");
        $this->Main_model->_delete("grades", "id", $id);
    }
    // END COMMANDS

    // QUERIES START
    public function getForTable()
    {
        $subjectId = $this->input->get("subjectId");
        $gradeLevel = $this->input->get("gradeLevel");
        $year = $this->input->get("year");
        $sectionId = $this->input->get("sectionId");

        $this->db->select("stud.id, stud.firstname, stud.middlename, stud.lastname, stud.section_id, s.section_name, subj.id, subj.subject_name");
        $this->db->from("students as stud");
        $this->db->where('stud.section_id', $sectionId);
        $this->db->join("sections as s", "s.id = stud.section_id");
        $this->db->join("subjects as subj", "subj.id = $subjectId");
        $result = $this->db->get();

        $counter = 0;
        foreach ($result->result() as $row) {
            $counter++;
            $studentFullName = "$row->firstname $row->middlename $row->lastname";

            $where['student_id'] = $row->id;
            $where['section_id'] = $row->section_id;
            $where['subject_id'] = $subjectId;
            $gradeTable = $this->Main_model->multiple_where("grades", $where)->result_array();

            $firstQuarter = count($gradeTable) == 0 ? "No Grade" : $gradeTable[0]['first_quarter'];
            $secondQuarter = count($gradeTable) == 0 ? "No Grade" : $gradeTable[0]['second_quarter'];
            $thirdQuarter = count($gradeTable) == 0 ? "No Grade" : $gradeTable[0]['third_quarter'];
            $fourthQuarter = count($gradeTable) == 0 ? "No Grade" : $gradeTable[0]['fourth_quarter'];
            $year = count($gradeTable) == 0 ? "N/A" : $gradeTable[0]['year'];

            echo '
            <tr>
                <td>' . $counter . '</td>
                <td>' . $studentFullName . '</td>
                <td>' . $firstQuarter . '</td>
                <td>' . $secondQuarter . '</td>
                <td>' . $thirdQuarter . '</td>
                <td>' . $fourthQuarter . '</td>
                <td>' . $year . '</td>
                
                <td>
                    <button class="btn btn-primary btn-sm edit" value="' . $row->id . '"><i class="fa fa-edit"></i></button>
                </td>
            </tr>
        ';
        }
    }

    function getByStudentId()
    {
        $where['subject_id'] = $this->input->get("subjectId");
        $where['grade_level'] = $this->input->get("gradeLevel");
        $where['year'] = date("Y");
        $where['section_id'] = $this->input->get("sectionId");
        $where['student_id'] = $this->input->get("studentId");

        echo json_encode($this->Main_model->multiple_where("grades", $where)->result_array());
    }
    // QUERIES END


}
