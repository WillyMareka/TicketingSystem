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

    public function getCourse($course_id = null)
    {
        $result = $this->db->query('SELECT * FROM courses WHERE course_id = '.$course_id);
        $courses = $result->result_array();

        return $courses;
    }

    public function total_students(){
         $result = $this->db->query('SELECT COUNT(*) as total_students FROM  students ');
        $total_students = $result->result_array();

        return $total_students;
    }
}