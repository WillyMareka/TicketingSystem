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
        $sql = "SELECT
                    `id`,
                    `firstname`,
                    `lastname`,
                    `othernames`,
                    `lecturer_phone`,
                    `lecturer_email`
                FROM 
                    `lecturers`";

        $lecturers = $this->db->query($sql);

        return $lecturers->result_array();
    }

    function get_students()
    {
    	$sql = "SELECT
    				`id`,
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

    function get_courses()
    {
        $sql = "SELECT
                    `course_id`,
                    `course_name`,
                    `couse_short_code`,
                    `Description`
                FROM
                    `courses`";

        $courses = $this->db->query($sql);

        return $courses->result_array();

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

    public function addUnits()
    {
        $unit_name = $this->input->post('unit_name');
        $course_id = $this->input->post('course');
        $unit_code = $this->input->post('unit_code');

        $sql = "INSERT INTO 
                            `units`
                    VALUES
                        (NULL, '$unit_name', '$unit_code', '$course_id')";

        $result = $this->db->query($sql);
    }
    

}