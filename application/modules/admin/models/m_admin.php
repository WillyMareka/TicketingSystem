<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends MY_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_courses(){
        $all_courses = $this ->db->get('courses');
        $all_courses = $all_courses->result_array();
        return $all_courses;
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

    function add_lec($path)
    {
        $firstname = strtoupper($this->input->post('firstname'));
        $surname = strtoupper($this->input->post('surname'));
        $others = strtoupper($this->input->post('othername'));
        $dob = strtoupper($this->input->post('dob'));
        $phone = $this->input->post('phonenumber');
        $lecturer_email = $this->input->post('lec_email');
        $location = strtoupper($this->input->post('location'));
        $course = $this->input->post('course');

        $lec_data = array();
        $user = array();
        $lecturer_data = array(
            'f_name' => $firstname,
            's_name' => $surname,
            'o_names' =>$others,
            'dob' =>$dob,
            'email'=>$lecturer_email,
            'course' =>$course,
            'phone_no'=>$phone,
            'profile_picture'=>$path 
            );
        array_push($lec_data, $lecturer_data);
        $this->db ->insert_batch('lecturers',$lec_data);

        $lec_no = mysql_insert_id();
        $password = md5("12345");

        $user_data = array(
            'username' =>$lec_no,
            'password' =>$password,
            'user_type' => 'lecturer',
            'is_active' => 0
            );
        array_push($user, $user_data);
        $this->db->insert_batch('users',$user);

        echo "Successfully Inserted " . $lec_no;die;
    }
}