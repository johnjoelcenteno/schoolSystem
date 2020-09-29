<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model');
	}

	public function index()
	{
		//notifications
		$this->Main_model->alertPromt('Invalid user', 'userInvalid');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run()) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			//validate username and password
			$where['username'] = $username;
			$where['password'] = $this->Main_model->passwordEncryptor($password);
			$credentialsTable = $this->Main_model->multiple_where('credentials', $where);

			if (count($credentialsTable->result_array()) != 0) {
				//meron siyang nahanap

				//validate and take account the user type
				$credentialsTable = $credentialsTable->row();
			} else {
				//wala siyang nahanap
				$this->session->set_userdata('userInvalid', 1);
				redirect('Login');
			}
		}

		$this->load->view('login');
	}
}
