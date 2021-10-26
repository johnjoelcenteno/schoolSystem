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

    /*
    This method will load view your class advisory 
    this sums up that adviser teacher will add their own
    advisory students 
    */
    public function AdvisoryClassManagement()
    {
        $data['userId'] = $this->Credentials_model->getUserId();
        $data['AdvisoryIdentifier'] = count($this->Main_model->get_where('advisers', 'teacher_id', $data['userId'])->result_array());
        $sectionId = $this->Main_model->get_where('advisers', 'teacher_id', $data['userId'])->row()->section_id;
        $data['SectionName'] = $this->Main_model->get_where('sections', 'id', $sectionId)->row()->section_name;

        $this->load->view('components/includes/header');
        $this->load->view('components/teacher_management/advisory_management', $data);
    }



    // Teachers Load View to Class Management
    public function ClassManagement()
    {
        $this->load->view('components/includes/header');
        $this->load->view('components/teacher_management/class_management');
    }

    /*
    This will serve as endpoint for teacher to load
    all of his/her assigned class or subject per sections
    */
    public function GetAllLoadMyTeacherIdForTable()
    {
        $userId = $this->Credentials_model->getUserId();
        $result = $this->Main_model->get_where("teacher_loads", "teacher_id", $userId)->result();

        $counter = 0;
        foreach ($result as $row) {
            $counter++;
            $subjectName = $this->Main_model->get_where('subjects', 'id', $row->subject_id)->row()->subject_name;
            $sectionName = $this->Main_model->get_where('sections', 'id', $row->section_id)->row()->section_name;
            $url_variable = base_url() . 'Teacher/ManageClassByClassLoad?ClassLoad=' . $row->id;

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
                    <a href="' . $url_variable . '" >
                    <button type="button" class="btn yellow edit" value="' . $row->id . '"><i class="fa fa-edit"></i></button>
                    </a>
                    </td>
                </tr
            ';
        }
    }

    //This load view refers to manage who will be your students in specific subject and section
    public function ManageClassByClassLoad()
    {
        $this->load->view('components/includes/header');
        $this->load->view('components/teacher_management/class_load_management');
    }

    /*
    This will serve as endpoint for teacher to load
     all of his/her student in specific class or subject  
    */



    // Parent Sec Here Below
    public function ParentManagement()
    {
        $this->load->view('components/includes/header');
        $this->load->view('components/teacher_management/parent_management');
    }
    public function CreateParent()
    {
        $insert['firstname'] = $this->input->post("firstname");
        $insert['middlename'] = $this->input->post("middlename");
        $insert['lastname'] = $this->input->post("lastname");
        $insert['contact_number'] = $this->input->post("contact_number");

        $this->Main_model->_insert("parents", $insert);
    }

    public function UpdateParent()
    {
        $id = $this->input->post("id");

        $update['firstname'] = $this->input->post("firstname");
        $update['middlename'] = $this->input->post("middlename");
        $update['lastname'] = $this->input->post("lastname");
        $update['contact_number'] = $this->input->post("contact_number");

        $this->Main_model->_update("parents", "id", $id, $update);
    }

    public function DeleteParent()
    {
        $id = $this->input->post("id");

        $this->Main_model->_delete("parents", "id", $id);
    }
    public function GetAllParentInfoForTable()
    {
        $result = $this->Main_model->get("parents", "id")->result();
        $counter = 0;
        foreach ($result as $row) {
            $counter++;
            echo '
                <tr>
                    <td>
                        ' . $counter . '
                    </td>
                    
                    <td>
                    ' . $row->firstname . '
                    </td>
                    <td>
                    ' . $row->middlename . '
                    </td>
                    <td>
                    ' . $row->lastname . '
                    </td>
                    <td>
                    ' . $row->contact_number . '
                    </td>
                    <td>
                        <button type="button" class="btn yellow edit" value="' . $row->id . '"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn red delete" value="' . $row->id . '"><i class="fa fa-times"></i></button>
                    </td>
                </tr>
            ';
        }
    }
    public function GetAllParent()
    {
        echo json_encode($this->Main_model->get("parents", "id")->result_array());
    }

    public function getParentById()
    {
        // $_POST['id'] = 1;
        $id = $this->input->post("id");

        echo json_encode($this->Main_model->get_where("parents", "id", $id)->result_array());
    }

    // END: parent management

}
