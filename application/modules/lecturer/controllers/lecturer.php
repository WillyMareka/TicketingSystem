<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lecturer extends MY_Controller
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
		// echo "<pre>";print_r($this->session->all_userdata());echo "</pre>"; exit; 

		$lecturer_id = $this->session->userdata('username');
		$course_id = $this->session->userdata('course_id');
		$data['msg_no'] = $this->m_lecturers->get_lecturer_messages_no($lecturer_id);
		$data['msg_data'] = $this->m_lecturers->get_lecturer_messages($lecturer_id);
		$data['units'] = $this->m_lecturers->get_lecturer_units($lecturer_id);
		//$data['sender_info'] = $this->m_lecturers->get_sender_info();

		
		$total_students= $this->m_lecturers->total_students_in_course($course_id);
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
		$course_id = $this->session->userdata('course_id');
		$course = $this->session->userdata('course');

		$data['msg_no'] = $this->m_lecturers->get_lecturer_messages_no($lecturer_id);
		$data['msg_data'] = $this->m_lecturers->get_lecturer_messages($lecturer_id);
		//$data['sender_info'] = $this->m_lecturers->get_sender_info();
		$total_students= $this->m_lecturers->total_students_in_course($course_id);
		$data['total_students'] = $total_students[0]['total_students'];
		$data['students'] = $this->m_lecturers->get_students();
		$data['upload_section'] = $this->createUploadNotesSection();

		$data['units'] = $this->m_lecturers->get_lecturer_units($lecturer_id);


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
		else if($selection == "upload_notes")
		{
			$this->load->view("upload_notes", $data);
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

		$jibu = $this->m_lecturers->examinations();
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
		$result = $this->m_lecturers->examinations();

		echo $result;
		// echo "Successful posting";
	}

	function createUploadNotesSection()
	{
		$units_section = '';
		$units = $this->m_lecturers->lecturer_units($this->session->userdata('username'));
		$topics = $this->m_lecturers->getTopics();
		$units_section .= '<form method = "POST" action = "'.base_url().'lecturer/upload_notes" enctype = "multipart/form-data">';
		$units_section .= '<div class="input-group" style="width: 100%;padding:4px;"><span class="input-group-addon" style="width: 40%;">Targeted Topic: </span>';
		$units_section .= '<select name = "topic" class = "form-control" required>';
		foreach ($topics as $topic) {
			$units_section .= '<option value = "'.$topic['topic_no'].'">'.$topic['topic'].'</option>';
		}
		$units_section .= '</select></div>';
		$units_section .= '<div class="input-group" style="width: 100%;padding:4px;"><span class="input-group-addon" style="width: 40%;">Unit: </span>';
		$units_section .= '<select name = "unit" class = "form-control" required>';
		foreach ($units as $unit) {
			$units_section .='<option value = "'.$unit['unit_id'].'">'.$unit['unit_name'].'</option>';
		}
		$units_section .= '</select></div>';
		$units_section .= '<div class = "input-group" style = "width: 100%;padding:4px;"><span class="input-group-addon" style="width: 40%;">Description: </span><textarea name = "description" class = "textfield form-control" required></textarea></div>';
		$units_section .= '<div class = "input-group" style = "width: 100%;padding:4px;"><span class="input-group-addon" style="width: 40%;">Upload File: </span><input type = "file" name="upload_file" value = "Pick File" required/></div>';
		$units_section .= '<div class = "input-group"><button type = "submit" class = "btn btn-success"><i class = "fa fa-upload"></i> Upload Notes</button></div>';
		$units_section .= '</form>';
		return $units_section;
	}

	function upload_notes()
	{
		$topic = $this->m_lecturers->getTopicByID($this->input->post('topic'));
		$unit_name = $this->m_lecturers->get_unit($this->input->post('unit'))[0]['unit_name'];
		$path = '';
		$config['upload_path'] = './upload/notes/';
		$config['allowed_types'] = 'pdf|docx|ppt';
		$this->load->library('upload', $config);
		// print_r($this->upload->do_upload('photos'));die;
		if ( ! $this->upload->do_upload('upload_file'))
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);die;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			foreach ($data as $key => $value) {
				$path = base_url().'upload/notes/'.$value['file_name'];
			}

			$request = $this->m_lecturers->add_notes($path);

			if ($request) {
				$notification_message = $this->session->userdata('secondname') . ' ' .$this->session->userdata('firstname') . ' posted notes to ' .$unit_name.' ' . $topic;
				$this->m_lecturers->createNotification($notification_message, $_POST['unit']);
				redirect(base_url() .'lecturer/page_to_load/upload_notes');
			}
			// echo "Success!";die;
		}
	}
}