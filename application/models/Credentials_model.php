<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Credentials_model extends CI_Model
{
    function getUserId()
    {
        $credentialsId = $_SESSION['credentialsId'];

        $userTable = $this->Main_model->get_where('teachers', 'credentials_id', $credentialsId)->row();

        return $userTable->id;
    }

    function getUserType()
    {
        $credentialsTable = $this->Main_model->get_where('credentials', 'id', $_SESSION['credentialsId'])->row();
        return $credentialsTable->user_type;
    }

    public function getUserTypeUByCredentialsId()
    {
        $credentialsId = $_SESSION['credentialsId'];
        return $this->Credentials_model->getUserType($credentialsId);
    }

    // For the views to display "welcome {Principal}"
    public function determineUserType($userType)
    {
        switch ($userType) {
            case 1:
                return "Principal";
                break;

            case 2:
                return "Adviser";
                break;

            case 3:
                return "Teacher";
                break;

            default:
                return null;
                break;
        }
    }
}
