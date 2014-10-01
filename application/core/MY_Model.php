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

    public function get_all_units($course_id = null){
        $result = $this->db->query('SELECT * FROM units WHERE course_id = '.$course_id);
        $units = $result ->result_array();

        return $units;
    }

    public function get_unit($unit_id = null){
        $result = $this->db->query('SELECT * FROM units WHERE unit_id = '.$unit_id);
        $unit = $result ->result_array();

        return $unit;
    }

    public function total_students(){
         $result = $this->db->query('SELECT COUNT(*) as total_students FROM  students ');
        $total_students = $result->result_array();

        return $total_students;
    }
    public function getUnits()
    {
        $query = $this->db->query("SELECT * FROM units");

        $units = $query->result_array();

        return $units;
    }

    public function getUnitsbyCourse($c_id)
    {
        $query = $this->db->query("SELECT * FROM units WHERE course_id = " . $c_id);

        $units = $query->result_array();

        return $units;
    }
    public function get_messages_no($table = null,$destination = null){
        $result = $this->db->query("
            SELECT COUNT(*) as total FROM $table
            WHERE destination = '$destination'
            ");
        $msg_number = $result->result_array();
        return $msg_number;
    }
    public function get_messages($table = null,$destination = null){
        $result = $this->db->query("
            SELECT * FROM $table WHERE destination = '$destination'
            ");
        
        $msg_data = $result ->result_array();
         return $msg_data;
    }
}