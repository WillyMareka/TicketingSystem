<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lecturer extends MX_Controller
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('m_lecturers');
    }

	function index()
	{
		$data = array();
		$data['nyangundi'] = "This is an attempt yo";
		$data['notification_1'] = "This is the first notification";
		$data['notification_2'] = "This is the second notification";
		$data['notification_3'] = "This is the third notification";
		$data['notification_4'] = "This is the fourth notification";
		$data['notification_4'] = "This is the fourth notification";
		$data['notification_5'] = "This is the fifth notification";

		$data['messages_no'] = 35;
		$lecturer_id = $this->session->userdata('username');
		$data['msg_no'] = $this->m_lecturers->get_lecturer_messages_no('lecturer_messages',$lecturer_id);
		$data['msg_data'] = $this->m_lecturers->get_lecturer_messages('lecturer_messages',$lecturer_id);
		$data['units'] = $this->m_lecturers->get_lecturer_units($lecturer_id);
		//$data['sender_info'] = $this->m_lecturers->get_sender_info();
		
		$total_students= $this->m_lecturers->total_students();
		$data['total_students'] = $total_students[0]['total_students'];
		if($this->session->userdata('user_type') == 'lecturer')
		{
			$this->load->view('lec_home.php',$data);
		}
		else
		{
			redirect(base_url() .'error/log_in');
		}

	}
	function page_to_load($selection = null){
		$unit_data = array();
		$lecturer_id = $this->session->userdata('username');
		$course = $this->session->userdata('course');

		$data['msg_no'] = $this->m_lecturers->get_lecturer_messages_no('lecturer_messages',$lecturer_id);
		$data['msg_data'] = $this->m_lecturers->get_lecturer_messages('lecturer_messages',$lecturer_id);
		//$data['sender_info'] = $this->m_lecturers->get_sender_info();
		$total_students= $this->m_lecturers->total_students();
		$data['total_students'] = $total_students[0]['total_students'];
		$data['students'] = $this->m_lecturers->get_students(1);
		$data['units'] = $this->m_lecturers->get_lecturer_units($lecturer_id);

		//echo "<pre>";print_r($data['units']);echo "</pre>";exit;

		if ($selection == "messages") {
			$this ->load->view('message.php',$data);
		}elseif ($selection == "charts") {
			$this ->load->view('charts.php',$data);
		}elseif ($selection == "tasks") {
			$this ->load->view('task.php',$data);
		}elseif ($selection == "forms") {
			$this ->load->view('form.php',$data);
		}elseif ($selection == "activity") {
			$this ->load->view('activity.php',$data);
		}elseif ($selection == "students") {
			$this ->load->view('students.php',$data);
		}elseif ($selection == "attendance") {
			//$data['students'] = $this->m_lecturers->get_students();
			$this ->load->view('attendance.php',$data);
		}elseif ($selection == "examinations") {
			//$data['students'] = $this->m_lecturers->get_students();
			$this ->load->view('examinations.php',$data);
		}elseif ($selection == "news_feed") {
			//$data['students'] = $this->m_lecturers->get_students();
			$this ->load->view('news_feed.php',$data);
		}
	}
	function messages(){
		$lecturer_id = $this->session->userdata('username');
		$message = $_POST['msg'];
		$subject = $_POST['sbj'];
		$unit = $_POST['unit'];
		
		$response = $this->m_lecturers->lecturer_messages($lecturer_id,$subject,$message,$unit,'students');
		echo $response;
	}
	function tester(){
		// $jibu = $this->m_lecturers->get_messages_no('lecturer_messages',1);
		// $jibu_ = $this->m_lecturers->get_messages('lecturer_messages',1);

		// echo "<pre>";print_r($jibu);echo "</pre></br>";
		// echo "<pre>";print_r($jibu_);echo "</pre>";

		$jibu = $this->m_lecturers->get_students();
		echo "<pre>";print_r($jibu);echo "</pre></br>";
	}

	function reply(){
		$reply = $this->m_lecturers->reply_message();
	}
	function log_out(){
		$this->session->sess_destroy();
		redirect('home');
	}

	function attendance(){
		$result = $this->m_lecturers->set_absentism();
		echo $result;
	}

	function examinations(){
		echo "Successful posting";
	}
}