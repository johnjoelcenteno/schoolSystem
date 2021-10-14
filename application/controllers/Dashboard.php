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
        $this->load->view('dashboard', $data);
    }
}
