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
        $this->load->view("components/includes/header");
        $this->load->view('components/teacher_management/manage_attendance');
        // $this->load->view("components/includes/footer");
    }

    public function viewRecord()
    {
        $section_id = $this->input->get("section_id");
        $grade_level = $this->input->get("grade_level");
        $subject_id = $this->input->get("subject_id");

        $this->load->view("components/includes/header");
        $this->load->view('components/teacher_management/view_attendance');
    }

    // COMMANDS START
    public function recordAllStudentsInSection()
    {
        $allStudents = json_decode($this->input->post("allStudents"));

        foreach ($allStudents as $row) {
            $insert['teacher_load_id'] = $this->input->post("teacher_load_id");
            $insert['student_id'] = $row->studentId;
            $insert['date'] = $this->input->post("date");
            $insert['time'] = $this->input->post("time");
            $insert['year'] = $this->input->post("year");
            $insert['section_id'] = $this->input->post("section_id");
            $insert['grade_level'] = $this->input->post("grade_level");
            $insert['status'] = $row->status;

            $this->Main_model->_insert($this->table, $insert);
        }
    }

    public function update()
    {
        $id = $this->input->post("id");

        $update['status'] = $this->input->post("status");

        $this->Main_model->_update($this->table, $update);
    }

    public function delete()
    {
        $id = $this->input->post("id");

        $this->Main_model->_delete($this->table, "id", $id);
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

    // QUERIES END
}
