<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function admin_details($username)
    {
        $sql = "SELECT
                        `f_name`,
                        `s_name`,
                        `profile_picture`,
                        `location`
                    FROM
                        `administrator`
                    WHERE
                        `id` = '$username'";

        $userdetails = $this->db->query($sql);

        return $userdetails->result_array();
    }

    function get_lectures()
    {
        $sql = "SELECT
                    `lecturers`.`id`,
                    `lecturers`.`f_name`,
                    `lecturers`.`s_name`,
                    `lecturers`.`o_names`,
                    `lecturers`.`course_code`,
                    `courses`.`course_id`,
                    `courses`.`course_name`,
                    `lecturers`.`phone_no`,
                    `lecturers`.`email`,
                    `lecturers`.`registration_date`,
                    `lecturers`.`status`
                FROM 
                    `lecturers`
                LEFT JOIN
                        `courses`
                    ON
                        `lecturers`.`course_code` = `courses`.`course_id`";

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
    				`admission_date`,
                    `status`
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
                    `course_short_code`,
                    `Description`
                FROM
                    `courses`";

        $courses = $this->db->query($sql);

        return $courses->result_array();

    }

    function get_units()
    {
        $sql = "SELECT
                    `units`.`unit_id`,
                    `units`.`course_id`,
                    `units`.`unit_name`,
                    `units`.`unit_short_code`,
                    `courses`.`course_id`,
                    `courses`.`course_name`
                FROM
                    `units`
                LEFT JOIN
                        `courses`
                    ON 
                        `units`.`course_id` = `courses`.`course_id`
                ORDER BY 
                        `courses`.`course_name`";

        $units = $this->db->query($sql);

        return $units->result_array();
    }

    function addStudent($path)
    {
        $firstname = strtoupper($this->input->post('firstname'));
        $lastname = strtoupper($this->input->post('lastname'));
        $others = strtoupper($this->input->post('othername'));
        $phone = $this->input->post('phonenumber');
        $gender = $this->input->post('gender');
        $student_email = $this->input->post('student_email');
        $parent_phone = $this->input->post('parent_phone');
        $parent_email= $this->input->post('parent_email');
        $location = strtoupper($this->input->post('location'));
        $course = $this->input->post('course');

        $query = "INSERT INTO students VALUES(NULL, '$firstname', '$lastname', '$others', '$phone', '$gender', '$parent_phone', '$student_email', '$parent_email', '$location', '$path', NULL, 1)";
        $result = $this->db->query($query);

        $student_no = mysql_insert_id();
        $password = md5("12345");

       
        $user_query = "INSERT INTO users VALUES (NULL, '$student_no', '$password', 'student', NULL, 0)";
        $result = $this->db->query($user_query);

        $course_query = $this->db->query("INSERT INTO student_course VALUES (NULL, '$student_no', 1, NULL)");

        $message = array();
        $message['text'] =  "Hello " . $firstname . ' ' . $lastname . ', Your admission no is: ' . $student_no . '. Default password is: 12345';
        $message['phonenumber'] = $phone;
        $message['email'] = $student_email;

        return $message;
    }

    function addCourses()
    {
        $course = $this->input->post('course_name');
        $code = $this->input->post('course_code');
        $description = $this->input->post('Description');

        $sql = "INSERT INTO
                            `courses`
                    VALUES
                        (NULL, '$course','$code', '$description')";

        $result = $this->db->query($sql);
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

    function add_lec($path)
    {
        $firstname = strtoupper($this->input->post('firstname'));
        $lastname = strtoupper($this->input->post('surname'));
        $others = strtoupper($this->input->post('othername'));
        $dob = $this->input->post('dob');
        $gender = $this->input->post('gender');
        $phone = $this->input->post('phonenumber');
        $email = $this->input->post('lec_email');
        $location = strtoupper($this->input->post('location'));
        $course = $this->input->post('course');

        $query = "INSERT INTO lecturers VALUES(NULL,'$course' , '$firstname', '$lastname', '$others', '$dob', '$gender', '$email', '$phone', '$path', NULL, 1, '$location')";
        $result = $this->db->query($query);

        $lecturer_no = mysql_insert_id();
        $password = md5("12345");

        $user_query = "INSERT INTO users VALUES (NULL, '$lecturer_no', '$password', 'lecturer', NULL, 0)";
        $result = $this->db->query($user_query);

       

        echo "Successfully Inserted " . $lecturer_no;die;
    }

    function add_admin($path)
    {
        $firstname = strtoupper($this->input->post('firstname'));
        $lastname = strtoupper($this->input->post('surname'));
        $others = strtoupper($this->input->post('othername'));
        $dob = $this->input->post('dob');
        $phone = $this->input->post('phonenumber');
        $email = $this->input->post('lec_email');
        $location = strtoupper($this->input->post('location'));
        

        $query = "INSERT INTO administrator VALUES(NULL, '$firstname', '$lastname', '$others', '$dob', '$email', '$phone', '$path', NULL, 1, '$location')";
        $result = $this->db->query($query);

        $admin_no = mysql_insert_id();
        $password = md5("12345");

        $user_query = "INSERT INTO users VALUES (NULL, '$admin_no', '$password', 'administrator', NULL, 0)";
        $result = $this->db->query($user_query);

       

        echo "Successfully Inserted " . $admin_no;die;
    }
    
    function assign_unit()
    {
        $id = $this->input->post('lect_id');
        $unitID = $this->input->post('unit_id');

        $sql = "INSERT INTO `lecturer_units` VALUES (NULL, '$id', '$unitID')";

        $assign = $this->db->query($sql);
    }

    function update_student(){
        $sql        =   "UPDATE  'students'
                            SET 
                                `status`        =   '$status'
                            WHERE  
                                `id`='$id'
                        ";

        $this->db->query($sql);
    }
}