<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aboutus extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }

    function index()
    {
        $this->load->view('components/includes/header');
        $this->load->view('components/aboutus');
        $this->load->view('components/includes/footer');
    }
}
