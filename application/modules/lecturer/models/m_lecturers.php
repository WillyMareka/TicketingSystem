<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_lecturers extends MY_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function lecturer_messages($lec_id=null, $subject = null,$message=null,$unit=null,$destination=null){
    	$destination = isset($destination)? $destination:'students';

    	$msg_data = array();
    	$message_data = array(
    		'lecturer_id' => $lec_id,
    		'destination'=> $destination,
    		'unit' => $unit,
    		'subject' => $subject,
    		'message' => $message
    		);

    	array_push($msg_data,$message_data);

    	$this->db->insert_batch('student_messages',$msg_data);
    	return "SUCCESSFUL MESSAGE SENDING";
    }


    public function set_absentism(){
    	$calc = 0;
		$student_id = $_POST['student_id'];
		$morning_class = $_POST['morning_class'];
		$late_morning_class = $_POST['late_morning_class'];
		$afternoon_class = $_POST['afternoon_class'];
		$evening_class = $_POST['evening_class'];
		$total_hrs = $_POST['total_hrs'];

		// echo $student_id. $morning_class. $late_morning_class. $afternoon_class. $evening_class;exit;

		if ($morning_class == 'TRUE' || $morning_class == 'true') {
			$calc = $calc + 2;
		}
		if ($late_morning_class == 'TRUE' || $late_morning_class == 'true') {
			$calc = $calc + 2;
		}
		if ($afternoon_class == 'TRUE' || $afternoon_class == 'true') {
			$calc = $calc + 2;
		}
		if ($evening_class == 'TRUE' || $evening_class == 'true') {
			$calc = $calc + 2;
		}

		$percentage_abs = round((($calc/$total_hrs)*100),1);
		$present_hrs = $calc;
		$absent_hrs = $total_hrs - $calc;
		$lecturer_id = $this->session->userdata('username');
		$unit_id = $this->session->userdata('unit_code');

		$query = "
			UPDATE attendance SET unit_id = $unit_id, present_hrs = $present_hrs, absent_hrs = $absent_hrs ,total_hrs=$total_hrs,
			percentage_absent = $percentage_abs,lecturer_id = $lecturer_id WHERE student_id = $student_id
		";

		// echo $query;exit;
		$result = $this->db->query($query);

		echo "The student's absentism has been updated";
    }

    public function get_lecturer_messages_no($lecturer_id){
        $result = $this->db->query(
        "
       SELECT COUNT(*) AS total FROM (SELECT * FROM student_messages s_m WHERE s_m.lecturer_id = $lecturer_id)total
        ");

        $msg_number = $result->result_array();
        // $result->result_array();
        return $msg_number;
    }

    // get_lecturer_messages_no
    public function get_lecturer_messages($lecturer_id){
    	// SELECT s.id as student_id,s.firstname,s.lastname,s.othernames,s.student_phone,s.student_email,s.photo,
     //    l_m.id as message_id,l_m.origin as msg_src,l_m.origin_description,l_m.message,l_m.subject,l_m.sent_on,l_m.origin from students s,lecturer_messages l_m 
     //    WHERE s.id = l_m.origin
        $result = $this->db->query("
        	SELECT s_m.id as message_id,l.id as lecturer_id,s_m.unit,l.f_name,l.s_name,l.o_names,l.course,
            l_u.lecturer_id,l_u.unit_id,u.unit_name,u.unit_short_code,
            s_m.subject,s_m.message,s_m.sent_on,s_m.unit as destination_unit
            FROM lecturers l,lecturer_units l_u,units u,student_messages s_m
            WHERE s_m.lecturer_id = $lecturer_id
        	 GROUP BY s_m.id
        ");

        $msg_data = $result->result_array();
        return $msg_data;
    }

    public function reply_message(){
    	$message = array();
    	$reply = $_POST['reply'];
    	$msg_id = $_POST['msg_id'];

    	$lecturer_id = $this->session->userdata('lecturer_id');
    	
    	$message_data = array(
    		'lecturer_id' => $lecturer_id,
    		'message'=>$msg,
    		'subject'=>$sbj,
    		'destination'=>'students',
    		'unit'
    		);

    	$query = "
    		UPDATE student_messages SET reply = '$reply',status = 1 WHERE id = $msg_id
    		";
    		// echo $query;exit;
    	$reply_query = $this->db->query($query);
    	echo "Your reply has been sent";
    }

    public function get_lecturer_units($lecturer_id = null){
    	$result = $this->db->query("SELECT l_u.id,l_u.lecturer_id,u.unit_name FROM lecturer_units l_u,units u WHERE u.unit_id = l_u.unit_id AND lecturer_id = $lecturer_id");
    	$results = $result ->result_array();
    	return $results;
    }

    public function get_student_marks($unit_id = null){
        $result = $this->db->query("SELECT * FROM examinations WHERE unit_id = $unit_id");
        $results = $result ->result_array();
        return $results;
    }

    public function examinations(){
        $cat_1 = $_POST['cat_1'];
        $cat_2 = $_POST['cat_2'];
        $student_id = $_POST['student_select'];
        $final_exam = $_POST['final_exam'];

        $student_data=$this->get_students(NULL,$student_id);
        $student_id = $student_data[0]['student_id'];
        $lecturer_id = $this->session->userdata('username');
        $unit_id = $this->session->userdata('unit_code');

        $max_marks = 300;
        $total_marks = $cat_1 + $cat_2+$final_exam;
        $student_marks = ($total_marks/$max_marks)*100;


        $examination = array();
        $examination_data = array(
            'cat_1' => $cat_1,
            'cat_2' => $cat_2,
            'final' => $final_exam,
            'percentage' => $student_marks,
            'lecturer_id' => $lecturer_id,
            'student_id' => $student_id,
            'unit_id' =>$unit_id
         );

        array_push($examination, $examination_data);
        $result = $this->db->insert_batch('examinations',$examination);

        // echo $result;die;
        return "Record Entry Was Successful";
    }

    public function get_students_and_marks($course_id = null,$student_id = null,$unit_id = null){
        $filter = isset($course_id)? "AND s_c.course_id = $course_id":NULL;
        $filter .= isset($student_id)? "AND s.id = $student_id":NULL;
        $filter .= isset($unit_id)? " AND e.unit_id = $unit_id":NULL;
         $result = $this->db->query("
            SELECT
             s.id as student_id,s.firstname,s.lastname,s.othernames,s.student_phone,s.student_email,s.photo,s.admission_date,
             s_c.course_id,c.course_name,c.course_short_code,e.percentage
            FROM  students s,student_course s_c,courses c,examinations e WHERE c.course_id = s_c.course_id AND s.id = s_c.student_id $filter
            ");
        $total_students = $result->result_array();
        return $total_students;
    }

    function lecturer_units($lec_no)
    {
        $query = $this->db->query("SELECT u.unit_id, u.unit_name FROM units u, lecturer_units t, lecturers l WHERE t.lecturer_id = " . $lec_no ." AND t.unit_id = u.unit_id AND l.id = t.lecturer_id");
        $lec_units = $query->result_array();

        return $lec_units;
    }

    function add_notes($path)
    {
        $description = $this->input->post('description');
        $topic = $this->input->post('topic');
        $unit = $this->input->post('unit');

        $query = $this->db->query("INSERT INTO uploaded_notes VALUES(NULL, '".$description."', '".$path."', '".$unit."', NULL, '".$topic."')");
        if($query)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function getTopicByID($t_no)
    {
        $query = $this->db->query("SELECT topic FROM topics WHERE topic_no = " . $t_no ." LIMIT 1");

        $topic = $query->result_array();

        return $topic[0]['topic'];
    }
    function createNotification($message, $unit)
    {
        $course_id = $this->getUnitCourse($unit);
        $query = $this->db->query("INSERT INTO notifications VALUES (NULL, '".$course_id."', '".$message."', NULL, '".$this->session->userdata('username')."')");
    }

    function getUnitCourse($unit)
    {
        $query = $this->db->query("SELECT course_id FROM units WHERE unit_id = " .$unit ." LIMIT 1");
        $unit = $query->result_array();

        return $unit[0]['course_id'];
    }


}