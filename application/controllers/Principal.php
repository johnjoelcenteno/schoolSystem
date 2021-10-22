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
        $this->load->view("components/includes/header");
        $this->load->view("components/roles_management/manage_teachers");
        // $this->load->view("components/includes/footer");
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


    // START: Manage subjects
    public function manageSubjects()
    {
        $this->load->view("");
    }

    public function createSubject()
    {
        $insert['subject_name'] = $this->input->post("subject_name");

        $this->Main_model->_insert("subjects", $insert);
    }

    public function updateSubject()
    {
        $id = $this->input->post("id");
        $update['subject_name'] = $this->input->post("subject_name");

        $this->Main_model->_update("subjects", "id", $id, $update);
    }

    public function deleteSubject()
    {
        $_POST['id'] = 1;
        $id = $this->input->post("id");

        $this->Main_model->_delete("subjects", "id", $id);
    }

    public function getAllSubjects()
    {
        echo json_encode($this->Main_model->get("subjects", "id")->result_array());
    }

    public function getSubjectById()
    {
        $subjectId = $this->input->post('id');
        echo json_encode($this->Main_model->get_where("subjects", 'id', $subjectId)->result_array());
    }
    // END: Manage subjects

    // START: Teacher load management
    public function manageTeacherLoad()
    {
        $this->load->view("");
    }

    public function createTeacherLoad()
    {
        $insert['teacher_id'] = $this->input->post('teacher_id');
        $insert['subject_id'] = $this->input->post('subject_id');
        $insert['section_id'] = $this->input->post('section_id');

        $this->Main_model->_insert("teacher_loads", $insert);
    }

    public function updateTeacherLoad()
    {
        $id = $this->input->post("id");

        $update['teacher_id'] = $this->input->post('teacher_id');
        $update['subject_id'] = $this->input->post('subject_id');
        $update['section_id'] = $this->input->post('section_id');

        $this->Main_model->_update("teacher_loads", "id", $id, $update);
    }

    public function deleteTeacherLoad()
    {
        $id = $this->input->post("id");

        $this->Main_model->_delete("teacher_loads", "id", $id);
    }

    public function getTeacherLoads()
    {
        echo json_encode($this->Main_model->get("teacher_loads", "id")->result_array());
    }

    public function getTeacherLoadById()
    {
        $id = $this->input->post("id");

        echo json_encode($this->Main_model->get_where("teacher_loads", "id", $id)->result_array());
    }

    public function getTeacherLoadBySubjectId()
    {
        $id = $this->input->post("id");

        echo json_encode($this->Main_model->get_where("teacher_loads", "subject_id", $id)->result_array());
    }

    public function getTeacherLoadByTeacherId()
    {
        $id = $this->input->post("id");

        echo json_encode($this->Main_model->get_where("teacher_loads", "teacher_id", $id)->result_array());
    }

    public function getTeacherLoadBySectionId()
    {
        $id = $this->input->post("id");

        echo json_encode($this->Main_model->get_where("teacher_loads", "section_id", $id)->result_array());
    }
    // END: Teacher load management

}
