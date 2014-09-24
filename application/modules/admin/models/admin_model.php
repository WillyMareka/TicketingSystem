<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');
    }

    function get_lectures()
    {

    }

    function get_students()
    {
    	$sql = "SELECT
    				`student_id`,
    				`firstname`,
    				`lastname`,
    				`othernames`,
    				`student_phone`,
    				`student_email`,
    				`admission_date`
    			FROM 
    				`students`";

    	$students = $this->db->query($sql);

    	return $students->result_array();
    }
    

}