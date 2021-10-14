<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Principal extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
        $this->load->model('Credentials_model');
    }

    public function index()
    {
        $data["userType"] = $this->Credentials_model->getUserType();
        $data["claim"] = $this->Credentials_model->determineUserType($data['userType']);
        $this->load->view('dashboard', $data);
    }

    // START: Teacher management
    public function manageTeachers()
    {
        $this->load->view("");
    }

    public function createTeacher()
    {
        $insert['firstname'] = $this->input->post('firstname');
        $insert['middlename'] = $this->input->post('middlename');
        $insert['lastname'] = $this->input->post('lastname');
        $insert['contact_number'] = $this->input->post('contact_number');

        $insert['id'] = $this->Main_model->_insert("teachers", $insert);

        return json_encode($insert);
    }

    public function updateTeacher()
    {
        $id = $this->input->post("id");
        $update['firstname'] = $this->input->post('firstname');
        $update['middlename'] = $this->input->post('middlename');
        $update['lastname'] = $this->input->post('lastname');
        $update['contact_number'] = $this->input->post('contact_number');

        $update['id'] = $this->Main_model->_update("teachers", "id", $id, $update);

        return json_encode($update);
    }

    public function deleteTeacher()
    {
        $id = $this->input->post("id");
        $this->Main_model->_delete("teachers", "id", $id);
    }

    public function getAllTeachers()
    {
        echo json_encode($this->Main_model->get("teachers", "id")->result_array());
    }

    public function getTeacherById()
    {
        $id = $this->input->post("id");
        echo json_encode($this->Main_model->get_where("teachers", "id", $id)->result_array());
    }
    // END: Teacher management


    // START: Section management
    public function manageSections()
    {
        $this->load->view("");
    }

    public function createSection()
    {
        $insert['section_name'] = $this->input->post('section_name');
        $insert['grade_level'] = $this->input->post('grade_level');
        $insert['students'] = json_encode([]);

        $insert['id'] = $this->Main_model->_insert("sections", $insert);

        return json_encode($insert);
    }

    // will update the name or grade_level of the section
    public function updateSection()
    {   
        $id = $this->input->post("id");
        $update['section_name'] = $this->input->post('section_name');
        $update['grade_level'] = $this->input->post('grade_level');
        

        $update['id'] = $this->Main_model->_update("sections", "id", $id, $update);

        return json_encode($update);
    }

    public function deleteSection()
    {
        $id = $this->input->post("id");
        $this->Main_model->_delete("sections", "id", $id);
    }

    public function getAllSections()
    {
        echo json_encode($this->Main_model->get("sections", "id")->result_array());
    }

    public function getSectionById()
    {
        $id = $this->input->post("id");
        echo json_encode($this->Main_model->get_where("sections", "id", $id)->result_array());
    }
    // END: Section management

    //START: Adviser management
    public function manageAdvisers()
    {
        $this->load->view("");
    }

    public function createAdviser()
    {
        $insert['teacher_id'] = $this->input->post("teacher_id");        
        $insert['section_id'] = $this->input->post("section_id");
        
        $this->Main_model->_insert("advisers", $insert);
    }

    public function updateAdviser()
    {
        $id = $this->input->post("id");
        
        $update['teacher_id'] = $this->input->post("teacher_id");        
        $update['section_id'] = $this->input->post("section_id");
        
        $this->Main_model->_update("advisers", "id", $id, $update);
    }

    public function deleteAdviser()
    {
        $id = $this->input->post("id");

        $this->Main_model->_delete("advisers", "id", $id);
    }

    public function getAllAdvisers()
    {
        echo json_encode($this->Main_model->get("advisers", "id")->result_array());
    }

    public function getAdviserByTeacherId()
    {
        $teacherId = $this->input->post("teacher_id");
        
        echo json_encode($this->Main_model->get_where("advisers", "teacher_id", $teacherId)->result_array());
    }
    //END: Adviser management
}