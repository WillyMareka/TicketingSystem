<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_users extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_user_details($uname, $pass)
    {
        $query = "SELECT * FROM users WHERE username = '$uname' && password = '$pass' LIMIT 1";

        $result = $this->db->query($query);

        if ($result->num_rows() == 1) {
            $user = $result->result_array();
            return $user;
        }

        else
        {
            return false;
        }
        

        // print_r($user);die;
    }

    function getUser($table, $name)
    {
        $query = "SELECT * FROM $table WHERE id = $name AND status = 1 LIMIT 1";

        $result = $this->db->query($query);

        $spec_user = $result->result_array();
        // print_r($user);die;

        return $spec_user;
    }

    function register_session()
    {
        //print_r($this->session->userdata());
    }

    

}