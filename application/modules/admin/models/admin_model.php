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
    				`admission_date`,
                    'group_id'
    			FROM 
    				`students`";

    	$students = $this->db->query($sql);

    	return $students->result_array();
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
        $group = '0';
        $query = "INSERT INTO students VALUES(NULL, '$firstname', '$lastname', '$others', '$phone', '$parent_phone', '$student_email', '$parent_email', '$location', '$path', 'NULL','$group')";
        $result = $this->db->query($query);

        $student_no = mysql_insert_id();
        $password = md5("12345");

        $user_query = "INSERT INTO users VALUES (NULL, '$student_no', '$password', 'student', NULL, 0)";
        $result = $this->db->query($user_query);

        $attendance_query = $this->db->query("INSERT INTO attendance VALUES (NULL, NULL, '$student_no', 0, 0,NULL,0,0)");                           

        $course_query = $this->db->query("INSERT INTO student_course VALUES (NULL, '$student_no', 1, NULL)");

        echo "Successfully Inserted " . $student_no;die;
    }
    

}