<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }

    function reset()
    {
        $this->db->truncate("advisers");
        $this->db->truncate("attendance");
        $this->db->truncate("grades");
        $this->db->truncate("parents");
        $this->db->truncate("sections");
        $this->db->truncate("students");
        $this->db->truncate("subjects");
        $this->db->truncate("teachers");
        $this->db->truncate("teacher_loads");

        $this->db->from("credentials");
        $this->db->where("user_type !=", 3);
        $result = $this->db->get()->result();

        foreach ($result as $row) {
            $this->Main_model->_delete("credentials", "id", $row->id);
        }

        echo "Database successfully reformated";
    }
}
