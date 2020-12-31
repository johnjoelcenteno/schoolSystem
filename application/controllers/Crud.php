<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud extends CI_Controller
{
    public $authKey;

    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }

    function getAuthKey()
    {
        $a = $this->generateAuthKey();
        return $a;
    }

    function generateAuthKey()
    {
        // generate random key to be put into the constructor 
        // just for example preapre your random code later
        $generatedString = $this->Main_model->generateRandomString(20);
        $this->authKey = $generatedString;
        return $this->authKey;
    }

    function validateAuthKey($userAuthKey)
    {
        if ($userAuthKey != $this->getAuthKey()) {
            echo "Access Denied mofos";
            die;
        }
    }

    /// FOR CRUD THAT HAS ONLY ONE TABLE

    /// not suitable for the creation of rows of two tables. 
    function createNoFk() // create row without a foreign key. 
    {
        // get the auth key. 
        if (isset($_POST['table'])) {

            $postFields = $_POST;

            // store the targeted table to table variable
            $table = $postFields['table'];

            // get the targeted table
            unset($postFields['table']);


            // insert into the database
            $result = $this->Main_model->_insert($table, $postFields);
        }
    }

    function editNoFk()
    {
        if (isset($_POST['table'])) {
            // get the id and the table
            $id = $this->input->post('id');
            $table = $this->input->post('table');

            $postFields = $_POST;

            // remove the id and the table in the post array 
            unset($postFields['id']);
            unset($postFields['table']);

            // all of the remaining post fields will be used as config in updating the row in the database
            $this->Main_model->_update($table, 'id', $id, $postFields);
        }
    }

    function deleteNoFk()
    {
        if (isset($_POST['table'])) {
            // get the id and the table 
            $id = $this->input->post('id');
            $table = $this->input->post('table');

            $this->Main_model->_delete($table, 'id', $id);
        }
    }

    function getTableInfo() // for update values. 
    {
        if (isset($_POST['table'])) {
            // get the table and store it in the table variable
            $id = $this->input->post('id');
            $table = $this->input->post('table');

            $targetTable = $this->Main_model->get_where($table, 'id', $id)->result_array();

            echo json_encode($targetTable);
        }
    }

    /// FOR CRUD THAT HAS ONLY ONE TABLE

    function createUserWithCredentials()
    {
        // use isset 
        if (isset($_POST['user_type'])) {
            // get targeted table (users, admin etc...)
            $secondaryTableTarget = $this->input->post('table');

            // insert into credentials table
            $cred['username'] = $this->input->post('username');
            $cred['password'] = $this->input->post('password');
            $cred['user_type'] = $this->input->post('user_type');

            $credentialsId = $this->Main_model->_insert('credentials', $cred);

            // insert into secondary table (users, admin etc..)
            $secondaryTable['firstname'] = $this->input->post('firstname');
            $secondaryTable['middlename'] = $this->input->post('middlename');
            $secondaryTable['lastname'] = $this->input->post('lastname');
            $secondaryTable['fullname'] = $this->input->post('fullname');
            $secondaryTable['credentials_id'] = $this->input->post('credentials_id'); // creds here
            $secondaryTable['mobile_number'] = $this->input->post('mobile_number');
            $secondaryTable['email'] = $this->input->post('email');
            $this->Main_model->_insert($secondaryTableTarget, $secondaryTable);
        }
    }

    /// change the password of the currently loged in user. (Must validate form first before changing)
    function changePassword()
    {
        if (isset($_POST['new_password'])) {
            $newPassword = $this->input->post('new_password');

            // get the currently loged in user's credentials id 
            $credentialsId = $_SESSION['credentialsId'];

            $update['password'] = $newPassword;
            $this->Main_model->_insert('credentials_id', 'id', $credentialsId, $update);
        }
    }
}
