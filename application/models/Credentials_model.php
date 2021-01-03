<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Credentials_model extends CI_Model
{
    function getUserId()
    {
        $credentialsId = $_SESSION['credentialsId'];

        $userTable = $this->Main_model->get_where('users', 'credentials_id', $credentialsId)->row();

        return $userTable->id;
    }

    function getUserType()
    {
        $credentialsTable = $this->Main_model->get_where('credentials', 'id', $_SESSION['credentialsId'])->row();
        return $credentialsTable->user_type;
    }
}
