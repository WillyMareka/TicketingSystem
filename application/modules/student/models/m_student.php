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

    	if($result)
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

        $query = $this->db->query('SELECT l.id, l.f_name, l.s_name, l.profile_picture FROM lecturers l, lecturer_units u WHERE u.lecturer_id = l.id AND u.unit_id = '.$unit.' LIMIT 1');
        $result = $query->result_array();

        if($result)
        {
            $lecturer['name'] = $result[0]['f_name'] . ' ' . $result[0]['s_name'];
            $lecturer['lec_id'] = $result[0]['id'];
            $lecturer['picture'] = $result[0]['profile_picture'];

            return $lecturer;
        }
        else
        {
            return 'No lecturer yet';
        }

    }

    public function getUploadedNotes($u_id)
    {
        $query = $this->db->query("SELECT * FROM uploaded_notes WHERE unit = " . $u_id . " ORDER BY date_uploaded");
        $notes = $query->result_array();

        return $notes;
    }

    public function getlargestuploaddatebytopic($topic_no, $unit_id)
    {
        $query = $this->db->query("SELECT MAX(date_uploaded) AS largedate FROM uploaded_notes WHERE topic_no = " .$topic_no. ' AND unit = ' .$unit_id);
        $largestdate = $query->result_array();
        $mydate = strtotime($largestdate[0]['largedate']);
        if($mydate)
        {
            $sanitized_date = date("l, F j, Y", $mydate);
            $sanitized_time = date("h:i A.", $mydate);

            return $sanitized_date .' at ' . $sanitized_time;
        }
        else
        {
            return "No notes ever uploaded";
        }
    }

    public function getTopicDescription($unit_id, $lecturer_id)
    {
        $query = $this->db->query("SELECT * FROM topic_description WHERE unit_id = " . $unit_id . " AND lecturer_id = " .$lecturer_id ." LIMIT 1");
        $topic_description = $query->result_array();

        if($topic_description)
        {
            return $topic_description[0];
        }
        else
        {
            return "No Description posted";
        }
    }

    public function getNotificationCount($cid)
    {
        $query = $this->db->query("SELECT count(id) AS nots FROM notifications WHERE course_id = " . $cid . " LIMIT 1");
        $count = $query->result_array();

        return $count[0]['nots'];
    }
    public function getNotifications($cid)
    {
        $query = $this->db->query('SELECT * FROM notifications WHERE course_id = ' . $cid . ' ORDER BY date_sent DESC');

        $notifications = $query->result_array();

        return $notifications;
    }

    public function getLecturerByID($lid)
    {
        $query = $this->db->query('SELECT * FROM lecturers WHERE id = ' . $lid .' LIMIT 1');

        $lecturer = $query->result_array();

        return $lecturer[0];
    }

    


}