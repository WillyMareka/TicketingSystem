<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_student extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function getStudentDetails($id)
    {
    	$query = $this->db->query("SELECT s.firstname, s.lastname, s.othernames, s.student_phone, s.parent_phone, s.student_email, s.parent_email, s.location, s.photo, c.course_id, c.course_name FROM students s, courses c, student_course t WHERE s.id = ".$id." AND c.course_id = t.course_id AND t.student_id = ".$id."");
    	$result = $query->result_array();

    	foreach ($result as $key => $value) {
    		$student = $value;
    	}
    	return $student;
    }    

}