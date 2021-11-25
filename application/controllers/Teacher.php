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
    // Teachers Load View to Class Management
    public function ClassManagement()
    {
        $this->load->view('components/includes/header');
        $this->load->view('components/teacher_management/class_management');
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
        $data['GetAllSection'] = $this->Main_model->get('sections', 'id');
        $isAdviser = $data['AdvisoryIdentifier'] == 0;
        if ($isAdviser) {
            $data['sectionId'] = 'No Available';
            $data['SectionName'] = 'No Available';
        } else {
            $data['studentsMovingUp'] = $this->Main_model->get("students_moving_up", 'id');
            $data['sectionId'] = $this->Main_model->get_where('advisers', 'teacher_id', $data['userId'])->row()->section_id;
            $data['SectionName'] = $this->Main_model->get_where('sections', 'id', $data['sectionId'])->row()->section_name;
        }

        $this->load->view('components/includes/header');
        $this->load->view('components/teacher_management/advisory_management', $data);
    }

    public function GetAllStudentForTableAdvisory()
    {
        $UserId = $this->Credentials_model->getUserId();
        $SectionId = $this->Main_model->get_where('advisers', 'teacher_id', $UserId)->row()->section_id;
        $result = $this->Main_model->get_where("students", "section_id",  $SectionId)->result();

        $counter = 0;
        foreach ($result as $row) {
            $counter++;
            $StudentFullName = $this->Main_model->getFullName('students', 'id', $row->id);
            $GradeLevel = $this->Main_model->get_where('sections', 'id', $row->section_id)->row()->grade_level;
            echo '
                <tr>
                    <td>
                    ' . $counter . '
                    </td>
                    <td>
                    ' . $row->id . ' 
                    </td>
                    <td>
                    ' .  $StudentFullName . '
                    </td>
                    <td>
                    ' . $row->contact_number . '
                    </td>
                    <td>
                    ' . $row->parent_fullname . '
                    </td>                    
                    <td>
                    ' . $GradeLevel . '
                    </td>
                    <td>
                    <button type="button" class="btn yellow edit" value="' . $row->id . '"><i class="fa fa-edit"></i></button>
                    </td>
                </tr
            ';
        }
    }
    public function GetAllStudentsBySectionForTable()
    {
        $sectionIdByTeacherLoad = $this->input->get('ClassSectionId');

        $result = $this->Main_model->get_where("students", "section_id", $sectionIdByTeacherLoad)->result();
        $counter = 0;
        foreach ($result as $row) {
            $counter++;

            // $url_variable = base_url() . 'Teacher/ManageClassByClassLoad?ClassSectionId=' . $row->section_id;

            echo '
                <tr>
                    <td>
                        ' . $counter . '
                    </td>
                    <td>
                        ' . $row->firstname . " " . $row->middlename . " " . $row->lastname . ' 
                    </td>
                    <td>
                    ' . $row->contact_number . '
                    </td>
                    
                </tr
            ';
        }
    }

    public function createStudent()
    {
        $insert['firstname'] = $this->input->post("firstname");
        $insert['middlename'] = $this->input->post("middlename");
        $insert['lastname'] = $this->input->post("lastname");
        $insert['contact_number'] = $this->input->post("contact_number");
        $insert['parent_fullname'] = $this->input->post("parent_fullname");
        $insert['parent_contact_number'] = $this->input->post("parent_contact_number");
        $insert['section_id'] = $this->input->post("section_id");


        $studentId = $this->Main_model->_insert("students", $insert);
    }

    public function updateStudent()
    {
        $id = $this->input->post("id");
        $update['firstname'] = $this->input->post("firstname");
        $update['middlename'] = $this->input->post("middlename");
        $update['lastname'] = $this->input->post("lastname");
        $update['contact_number'] = $this->input->post("contact_number");
        $update['parent_fullname'] = $this->input->post("parent_fullname");
        $update['parent_contact_number'] = $this->input->post("parent_contact_number");
        $update['section_id'] = $this->input->post("section_id");

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
            $url_variable = base_url() . 'Teacher/ManageClassByClassLoad?ClassSectionId=' . $row->section_id;

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
                    <button type="button" class="btn grey view" value="' . $row->id . '"><i class="fa fa-eye"></i></button>

                    </a>
                    </td>
                </tr
            ';
        }
    }


    //This load view refers to manage who will be your students in specific subject and section
    public function ManageClassByClassLoad()
    {
        $userId = $this->Credentials_model->getUserId(); //Logged Teacher UserId
        $data['subjectId'] = $this->Main_model->get_where("teacher_loads", "teacher_id", $userId)->row()->subject_id;
        $data['sectionId'] = $this->input->get('ClassSectionId');
        $data['subjectName'] = $this->Main_model->get_where('subjects', 'id', $data['subjectId'])->row()->subject_name;
        $data['sectionName'] = $this->Main_model->get_where('sections', 'id', $data['sectionId'])->row()->section_name;
        $data['gradeLevel'] = $this->Main_model->get_where('sections', 'id', $data['sectionId'])->row()->grade_level;
        $data['ClassSectionId'] = $this->input->get('ClassSectionId');


        $this->load->view('components/includes/header');
        $this->load->view('components/teacher_management/class_load_management', $data);
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
        $id = $this->input->post("id");

        echo json_encode($this->Main_model->get_where("parents", "id", $id)->result_array());
    }

    // END: parent management

    // ADITIONAL POST REQUEST
    public function getSectionStudentsFromStudentsMovingUpTable()
    {
        $where['student_id'] = $this->input->post("student_id");
        $section_id = $this->input->post('section_id');

        $studentsMovingUpPk = $this->Main_model->multiple_where("students_moving_up", $where)->row()->id;

        $update['section_id'] = $section_id;
        $this->Main_model->_update("students", "id", $where['student_id'], $update);

        $this->Main_model->_delete("students_moving_up", "id", $studentsMovingUpPk);
    }
    // ADITIONAL POST REQUESTS

    // ADDITIONAL GET REQUEST
    public function getStudentsMovingUpForSelect()
    {
        $table = $this->Main_model->get("students_moving_up", 'id')->result();
        echo "<option>Select students moving up</option>";
        foreach ($table as $row) {
            $studentFullName = $this->Main_model->getFullName("students", "id", $row->student_id);
            echo '
                <option value="' . $row->student_id . '">' . $studentFullName . '</option>
            ';
        }
    }
    // ADDITIONAL GET REQUEST
}
