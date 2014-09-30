<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends MY_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function addStudent($path)
    {
    	$firstname = strtoupper($this->input->post('firstname'));
    	$lastname = strtoupper($this->input->post('lastname'));
    	$others = strtoupper($this->input->post('othername'));
    	$phone = $this->input->post('phonenumber');
    	$student_email = $this->input->post('student_email');
    	$parent_phone = $this->input->post('parent_phone');
    	$parent_email= $this->input->post('parent_email');
    	$location = strtoupper($this->input->post('location'));
    	$course = $this->input->post('course');

    	$query = "INSERT INTO students VALUES(NULL, '$firstname', '$lastname', '$others', '$phone', '$parent_phone', '$student_email', '$parent_email', '$location', '$path', NULL)";
    	$result = $this->db->query($query);

    	$student_no = mysql_insert_id();
    	$password = md5("12345");

    	$user_query = "INSERT INTO users VALUES (NULL, '$student_no', '$password', 'student', NULL, 0)";
    	$result = $this->db->query($user_query);

    	$course_query = $this->db->query("INSERT INTO student_course VALUES (NULL, '$student_no', 1, NULL)");

    	echo "Successfully Inserted " . $student_no;die;
    }

    function addTimetable($path, $filetype)
    {
        $filename = $_POST['file_name'];
        $course_id = $_POST['course'];
        $category = $_POST['category'];

        $query = "INSERT INTO timetables VALUES (NULL, '$filename', '$path', '$filetype', '$category', $course_id, NULL, 1)";
        $result = $this->db->query($query);

        if ($result) {
            return true;
        }
        else
        {
            return false;
        }
    }
}