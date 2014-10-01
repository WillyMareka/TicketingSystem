<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_lecturers extends MY_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function lecturer_messages($lec_id=null, $subject = null,$message=null,$unit=null,$destination=null){
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

    function set_absentism(){
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

    public function get_lecturer_messages_no(){
        $result = $this->db->query(
        "
       SELECT COUNT(*) AS total FROM (SELECT s.id,s.firstname,s.lastname,s.othernames,s.student_phone,s.student_email,s.photo, l_m.origin as msg_src,l_m.origin_description,l_m.message,l_m.subject,l_m.sent_on,l_m.origin FROM students s,lecturer_messages l_m WHERE s.id = l_m.origin)total
        ");

        $msg_number = $result->result_array();
        // $result->result_array();
        return $msg_number;
    }

    // get_lecturer_messages_no
    public function get_lecturer_messages(){
        $result = $this->db->query("
        SELECT s.id as student_id,s.firstname,s.lastname,s.othernames,s.student_phone,s.student_email,s.photo,
        l_m.id as message_id,l_m.origin as msg_src,l_m.origin_description,l_m.message,l_m.subject,l_m.sent_on,l_m.origin from students s,lecturer_messages l_m 
        WHERE s.id = l_m.origin
        ");

        $msg_data = $result->result_array();
        return $msg_data;
    }

    public function reply_message(){
    	$reply = $_POST['reply'];
    	$msg_id = $_POST['msg_id'];

    	$query = "
    		UPDATE student_messages SET reply = '$reply',status = 1 WHERE id = $msg_id
    		";
    		// echo $query;exit;
    	$reply_query = $this->db->query($query);
    	echo "Your reply has been sent";
    }

    function defaultfunction($param1, $param2)
    {
        
    }

}