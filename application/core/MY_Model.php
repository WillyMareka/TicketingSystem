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

    public function total_students_in_course($course_id){
         $result = $this->db->query("SELECT COUNT(*) as total_students FROM  student_course WHERE course_id = $course_id ");
        $total_students = $result->result_array();

        return $total_students;
    }

    public function getUnits()
    {
        $query = $this->db->query("SELECT * FROM units");

        $units = $query->result_array();

        return $units;
    }

    //  THE FUNCTION BELOW(get_students):
    // gathers student information based on parameters.
    // if all are wanted,pass nothing into parameters.
    // if all in a course,pass only course_id
    // if specific student,pass both or only student id
    // refer to SETH for any queries
    public function get_students($course_id = null,$student_id = null){
        $filter = isset($course_id)? "AND s_c.course_id = $course_id":NULL;
        $filter .= isset($student_id)? "AND s.id = $student_id":NULL;
         $result = $this->db->query("
            SELECT
             s.id as student_id,s.firstname,s.lastname,s.othernames,s.student_phone,s.student_email,s.photo,s.admission_date,
             s_c.course_id,c.course_name,c.course_short_code
            FROM  students s,student_course s_c,courses c WHERE c.course_id = s_c.course_id AND s.id = s_c.student_id $filter
            ");
        $total_students = $result->result_array();

        return $total_students;
    }

    public function get_messages_no($table = null,$destination = null){
        $result = $this->db->query("
            SELECT COUNT(*) as total FROM $table
            WHERE destination = '$destination'");
        $total_students = $result->result_array();

        return $total_students;
    }

    public function getUnitsbyCourse($c_id)
    {
        $query = $this->db->query("SELECT * FROM units WHERE course_id = " . $c_id);

        $units = $query->result_array();

        return $units;
    }

    public function get_messages($table = null,$destination = null){
        $result = $this->db->query("
            SELECT * FROM $table WHERE destination = '$destination'
            ");
        
        $msg_data = $result ->result_array();
         return $msg_data;
    }
}