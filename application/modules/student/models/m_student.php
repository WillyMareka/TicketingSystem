<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_student extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function getStudentDetails($id)
    {
        $student = "";
    	$query = $this->db->query("SELECT s.firstname, s.lastname, s.othernames, s.student_phone, s.parent_phone, s.student_email, s.parent_email, s.location, s.photo, c.course_id, c.course_name FROM students s, courses c, student_course t WHERE s.id = ".$id." AND c.course_id = t.course_id AND t.student_id = ".$id."");
    	$result = $query->result_array();

    	if($student)
        {
            foreach ($result as $key => $value) {
    		$student = $value;
    	   }
        }
        else
        {
            echo "No found!";
        }
    	return $student;
    }

    public function getTimetables($course)
    {
        $timetable = '';
        $query = $this->db->query("SELECT * FROM timetables WHERE course_id = $course");
        $result = $query->result_array();

        foreach ($result as $key => $value) {
            $timetable[$value['id']] = $value;
        }

        return $timetable;
    } 

    public function getUnitLecturer($unit)
    {
        $lecturer_name = '';

        $query = $this->db->query('SELECT l.f_name, l.s_name FROM lecturers l, lecturer_units u WHERE u.lecturer_id = l.id AND u.unit_id = '.$unit.' LIMIT 1');
        $result = $query->result_array();

        if($result)
        {
            $lecturer_name = $result[0]['f_name'] . ' ' . $result[0]['s_name'];
        }
        else
        {
            $lecturer_name = 'No lecturer yet';
        }

        return $lecturer_name;

    }  

}