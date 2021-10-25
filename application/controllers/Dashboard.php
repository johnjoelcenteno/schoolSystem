<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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

        $data['teacherCount'] = count($this->Main_model->get("teachers", "id")->result_array());
        $data['sectionCount'] = count($this->Main_model->get("sections", "id")->result_array());
        $data['studentCount'] = count($this->Main_model->get("students", "id")->result_array());
        $data['subjectCount'] = count($this->Main_model->get("subjects", "id")->result_array());
        
        $this->load->view('components/includes/header.php');
        $this->load->view('components/dashboard/admin_dashboard', $data);
        $this->load->view('components/includes/footer.php');
    }
}
