<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Teacher_dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
        $this->load->model('Credentials_model');
    }

    public function index()
    {
        $data['userId'] = $this->Credentials_model->getUserId();
        $data['fullName'] = $this->Main_model->getFullName('teachers', 'id', $data['userId']);
        $this->load->view('components/includes/header.php');
        $this->load->view('components/dashboard/teacher_dashboard', $data);
        $this->load->view('components/includes/footer.php');
    }
}
