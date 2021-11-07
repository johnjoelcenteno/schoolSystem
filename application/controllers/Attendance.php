<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Attendance extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
        $this->load->model('Credentials_model');
    }

    private $table = "attendance";

    public function recordAttendance()
    {
        $data['ClassSectionId'] = $this->input->get('ClassSectionId');
        $data['ClassSubjectId'] = $this->input->get('ClassSubjectId');
        $data['gradeLevel'] = $this->input->get('gradeLevel');
        $this->load->view("components/includes/header");
        $this->load->view('components/teacher_management/manage_attendance', $data);
        // $this->load->view("components/includes/footer");
    }

    public function viewRecord()
    {
        $data['sectionId'] = $this->input->get("ClassSectionId");
        $data['gradeLevel'] = $this->input->get("gradeLevel");
        $data['subjectId'] = $this->input->get("ClassSubjectId");

        $this->load->view("components/includes/header");
        $this->load->view('components/teacher_management/view_attendance', $data);
    }

    public function getAndTextParentOfStudent($studentId)
    {
        $studentTable = $this->Main_model->get_where("students", "id", $studentId)->row();

        $parentFullName = $studentTable->parent_fullname;
        $parentContactNumber = $studentTable->parent_contact_number;

        $message = "Your student is absent today " . date("Y-m-d");

        $this->Main_model->SendTextWithNumberAndMessage($parentContactNumber, $message);
    }

    // COMMANDS START
    public function recordAllStudentsInSection()
    {
        $allStudents = json_decode($this->input->post("allStudents"));

        foreach ($allStudents as $row) {
            $insert['student_id'] = $row->studentId;
            $insert['date'] = date("Y-m-d");
            $insert['time'] = date("h:i:s a");
            $insert['year'] = date("Y");
            $insert['section_id'] = $this->input->post("sectionId");
            $insert['grade_level'] = $this->input->post("gradeLevel");
            $insert['subject_id'] = $this->input->post("subjectId");
            $insert['status'] = $row->status;

            if ($insert['status'] == "Absent") $this->getAndTextParentOfStudent($insert['student_id']);

            $this->Main_model->_insert($this->table, $insert);
        }
    }

    public function update()
    {
        $id = $this->input->post("id");

        $update['status'] = $this->input->post("status");
        $update['isExcuse'] = $this->input->post("isExcuse");
        $update['excuse'] = $this->input->post("excuse");

        $this->Main_model->_update($this->table, "id", $id, $update);
    }

    public function delete()
    {
        $id = $this->input->post("id");

        $this->Main_model->_delete($this->table, "id", $id);
    }

    public function updateIsExcuse()
    {
        $id = $this->input->post("attendanceId");
        $update['isExcuse'] = 1;
        $update['excuse'] = $this->input->post("excuse");

        $studentId = $this->Main_model->get_where("attendance", "id", $id)->row()->student_id;
        $studentTable = $this->Main_model->get_where("students", "id", $studentId)->row();
        $parentNumber = $studentTable->parent_contact_number;
        $parentFullName = $studentTable->parent_fullname;

        $message = "Student Excused the excuse is: " . $update['excuse'];
        $this->Main_model->SendTextWithNumberAndMessage($parentNumber, $message);

        $this->Main_model->_update("attendance", "id", $id, $update);
    }
    // COMMANDS END


    // QUERIES START
    public function getBySectionGradeLevelSubjectDate() // note: when needed filtering just change the date post value. 
    {
        $where['section_id'] = $this->input->post('section_id');
        $where['grade_level'] = $this->input->post('grade_level');
        $where['subject_id'] = $this->input->post('subject_id');
        $where['date'] = $this->input->post('date');

        echo json_encode($this->Main_model->multiple_where($this->table, $where)->result_array());
    }
    public function getForTable()
    {
        $where['section_id'] = $this->input->post('sectionId');
        $where['grade_level'] = $this->input->post('gradeLevel');
        $where['subject_id'] = $this->input->post('subjectId');
        $where['date'] = date('Y-m-d', strtotime('-1 day'));

        $query = $this->Main_model->multiple_where("attendance", $where);

        $counter = 0;
        foreach ($query->result() as $row) {
            $counter++;

            $studentFullName = $this->Main_model->getFullName('students', "id", $row->student_id);

            echo '
                <tr>
                    <td>' . $counter . '</td>
                    <td>' . $studentFullName . '</td>
                    <td>' . $row->date . '</td>
                    <td>' . $row->time . '</td>
                    <td>' . $row->status . '</td>
                </tr>
            ';
        }
    }

    public function getForTableFilter()
    {
        $where['section_id'] = $this->input->get('sectionId');
        $where['grade_level'] = $this->input->get('gradeLevel');
        $where['subject_id'] = $this->input->get('subjectId');
        $where['date'] = $this->input->get('date');

        $query = $this->Main_model->multiple_where("attendance", $where);

        $counter = 0;
        foreach ($query->result() as $row) {
            $counter++;

            $studentFullName = $this->Main_model->getFullName('students', "id", $row->student_id);

            $where['student_id'] = $row->student_id;
            $isExcused = $this->Main_model->multiple_where("attendance", $where)->row()->isExcuse; // wrong algorithm query duplication 

            $actions = $isExcused ? "<span class='text-success'>Excused</span>" : '<button class="btn btn-info btn-sm excuse" value="' . $row->id . '">Excuse</button>';

            echo '
                <tr>
                    <td>' . $counter . '</td>
                    <td>' . $studentFullName . '</td>
                    <td>' . $row->date . '</td>
                    <td>' . $row->time . '</td>
                    <td>' . $row->status . '</td>
                    <td>
                    ' . $actions . '
                    </td>
                </tr>
            ';
        }
    }

    public function GetAllStudentsBySectionIdAndSubjectId()
    {
        $where['section_id'] = $this->input->get('ClassSectionId');
        // $where['grade_level'] = $this->input->get('gradeLevel');
        // $where['subject_id'] = $this->input->get('subjectId');
        // $where['date'] = date("Y-m-d");

        $query = $this->Main_model->multiple_where("students", $where);

        $counter = 0;
        foreach ($query->result() as $row) {
            $counter++;

            $studentFullName = $this->Main_model->getFullName('students', "id", $row->id);

            echo '
                <tr>
                    <td>' . $counter . '</td>
                    <td>' . $studentFullName . '</td>
                    <td>'  . date("Y-m-d") . '</td>
                    <td>' . date("h:i:s a") . '</td>
                    <td>
                        <input type="checkbox" style="height:1rem; width:1rem;" class="checkBox" value="' . $row->id . '">
                    </td>
                </tr>
            ';
        }
    }

    public function GetPreviousDayForViewing()
    {
        $where['section_id'] = $this->input->get('sectionId');
        $where['grade_level'] = $this->input->get('gradeLevel');
        $where['subject_id'] = $this->input->get('subjectId');
        $where['date'] = date('Y-m-d', strtotime('-1 day'));
        // $this->Main_model->showNormalArray($where);
        $query = $this->Main_model->multiple_where("attendance", $where);
        // $this->Main_model->showNormalArray($query->result());
        // die;
        $counter = 0;
        foreach ($query->result() as $row) {
            $counter++;

            $studentFullName = $this->Main_model->getFullName('students', "id", $row->student_id);

            echo '
                <tr>
                    <td>' . $counter . '</td>
                    <td>' . $studentFullName . '</td>
                    <td>'  . $row->date . '</td>
                    <td>' . $row->time . '</td>
                    <td>' . $row->status . '</td>
                </tr>
            ';
        }
    }
    // QUERIES END
}
