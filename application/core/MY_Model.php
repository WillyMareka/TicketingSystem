<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');
    }

    public function getAllCourses()
    {
    	$result = $this->db->query('SELECT * FROM courses');
    	$courses = $result->result_array();
    	return $courses;
    }
}