<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Teacher extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
        $this->load->model('Credentials_model');
    }

    public function index()
    {
        $this->load->view('');
    }

    // START: parent management
    
    public function manageParents()
    {
        $this->load->view("");
    }

    public function createParent()
    {
        $insert['firstname'] = $this->input->post("firstname");
        $insert['middlename'] = $this->input->post("middlename");
        $insert['lastname'] = $this->input->post("lastname");
        $insert['contact_number'] = $this->input->post("contact_number");

        $this->Main_model->_insert("parents", $insert);
    }

    public function updateParent()
    {
        $id = $this->input->post("id");

        $update['firstname'] = $this->input->post("firstname");
        $update['middlename'] = $this->input->post("middlename");
        $update['lastname'] = $this->input->post("lastname");
        $update['contact_number'] = $this->input->post("contact_number");

        $this->Main_model->_update("parents", "id", $id, $update);
    }

    public function deleteParent()
    {
        $id = $this->input->post("id");

        $this->Main_model->_delete("parents", "id", $id);
    }

    function getAllParents()
    {
        echo json_encode($this->Main_model->get("parents", "id")->result_array());
    }

    public function getParentById()
    {
        $_POST['id'] = 1;
        $id = $this->input->post("id");

        echo json_encode($this->Main_model->get_where("parents", "id", $id)->result_array());
    }

    // END: parent management

    public function manageStudents()
    {
        $this->load->view("");
    }

    // START: student management
    public function createStudent()
    {
        $insert['firstname'] = $this->input->post("firstname");
        $insert['middlename'] = $this->input->post("middlename");
        $insert['lastname'] = $this->input->post("lastname");
        $insert['contact_number'] = $this->input->post("contact_number");
        $insert['parent_id'] = $this->input->post("parent_id");
        $insert['grade_level'] = $this->input->post("grade_level");
        
        $this->Main_model->_insert("students", $insert);
    }

    public function updateStudent()
    {
        $id = $this->input->post("id");
        $update['firstname'] = $this->input->post("firstname");
        $update['middlename'] = $this->input->post("middlename");
        $update['lastname'] = $this->input->post("lastname");
        $update['contact_number'] = $this->input->post("contact_number");
        $update['parent_id'] = $this->input->post("parent_id");
        $insert['grade_level'] = $this->input->post("grade_level");
        
        $this->Main_model->_update("students", "id", $id, $update);
    }

    public function deleteStudent()
    {
        $id = $this->input->post("id");
        
        $this->Main_model->_delete("students", $id);
    }

    public function getAllStudents()
    {
        echo json_encode($this->Main_model->get("students", "id")->result_array());
    }

    public function getStudentById()
    {
        $id = $this->input->post("id");

        echo json_encode($this->Main_model->get_where("students", "id", $id)->result_array());
    }

    public function getStudentBySection()
    {
        $id = $this->input->post("id");

        echo json_encode($this->Main_model->get_where("students", "section_id", $id)->result_array());
    }

    public function getStudentBySubject()
    {
        $id = $this->input->post("id");

        echo json_encode($this->Main_model->get_where("students", "section_id", $id)->result_array());
    }

    public function getStudentByGradeLevel()
    {
        $grade_level = $this->input->post("grade_level");

        echo json_encode($this->Main_model->get_where("students", "grade_level", $grade_level)->result_array());
    }
    // END: student management
    
    
    
  
}
