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
    }

    public function ClassManagement()
    {
        $this->load->view('components/includes/header');
        $this->load->view('components/teacher_management/class_management');
    }
    public function GetAllLoadMyTeacherIdForTable()
    {
        $userId = $this->Credentials_model->getUserId();

        $result = $this->Main_model->get_where("teacher_loads", "teacher_id", $userId)->result();
        $counter = 0;
        foreach ($result as $row) {
            $counter++;
            $url_variable = '';
            $subjectName = $this->Main_model->get_where('subjects', 'id', $row->subject_id)->row()->subject_name;
            $sectionName = $this->Main_model->get_where('sections', 'id', $row->section_id)->row()->section_name;

            echo '
                <tr>
                    <td>
                        ' . $counter . '
                    </td>
                    <td>
                        ' . $row->id . ' LD
                    </td>
                    <td>
                    ' . $subjectName . '
                    </td>
                    <td>
                    ' . $sectionName . '
                    </td>
                    <td>
                    ' . $row->schedule . '
                   
                    <td>
                        <button type="button" class="btn yellow edit" value="' . $row->id . '"><i class="fa fa-edit"></i></button>
                    </td>
                </tr>
            ';
        }
    }
}
