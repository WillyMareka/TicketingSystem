<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends MX_Controller
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('admin/m_admin');
    }

    function index()
    {
    	$this->check_login();
    }
    function check_login()
    {
    	// print_r($this->session->userdata);die;
    	if($this->session->userdata('logged_in') == TRUE)
    	{
    		return TRUE;
    	}
    	else
    	{
    		return FALSE;
    	}
    }
	function hash_pass($upass)
	{
		return md5($upass);
	}
	function logout()
	{
		$this->session->sess_destroy();

		redirect(base_url().'home');
	}
	function send_sms($numbers, $message)
	{

		// Textlocal account details
	$username = "baksajoshua09@gmail.com";
	$hash = "dbde7e83d2ba4579eb2dfd4ba75b03f59c7ba3ad";
	
	// Message details
	$numbers = $numbers;
	$sender = urlencode('SUN2014');
	$message = rawurlencode($message);
 
	// Prepare data for POST request
	$data = array('username' => $username, 'hash' => $hash, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('http://api.txtlocal.com/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;
		// echo $numbers;die;
		// $username = "baksajoshua09@gmail.com";
  //   	$hash = "dbde7e83d2ba4579eb2dfd4ba75b03f59c7ba3ad";

	 //    // Configuration variables. Consult http://api.txtlocal.com/docs for more info.
	 //    $test = "0";

	 //    // Data for text message. This is the text message data.
	 //    $sender = "SUN2014"; // This is who the message appears to be from.
	 //    $numbers = "$numbers";// A single number or a comma-seperated list of numbers
	 //    // 612 chars or less
	 //    // A single number or a comma-seperated list of numbers
	 //    $message = urlencode($message);
	 //    $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	 //    // echo $data;die;
	 //    $ch = curl_init('http://api.txtlocal.com/send/?');
	 //    curl_setopt($ch, CURLOPT_POST, true);
	 //    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	 //    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	 //    $result = curl_exec($ch); // This is the result from the API
	 //    echo $result;die;
	 //    curl_close($ch);
	}

	function createCourseDropdown()
	{
		$select_dropdown = '';
		$courses = $this->m_admin->getAllCourses();
		$select_dropdown .= "<select name = 'course' class='form-control'>";
		foreach ($courses as $key => $value) {
			$select_dropdown .= '<option value = "'.$value['course_id'].'">'.$value['course_name'].'</option>';
		}
		$select_dropdown .= "</select>";

		return $select_dropdown;
	}

	function send_email($email, $message)
	{
		$time=date('Y-m-d');
		
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => "chrisrichrads@gmail.com",
			'smtp_pass' => "joshuaSUN"
			);
		
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('chrisrichrads@gmail.com', 'STRATHMORE UNIVERSITY NOTIFICATION');
		$this->email->to($email);
		$this->email->subject('WELCOME TO STRATHMORE UNIVERSITY');
		$this->email->message($message);
		$this->email->set_mailtype("html");
		
		
		if($this->email->send())
			{	
				// $this->admin_model->store_sent_email($recipient, $subject, $message, $time);
				$this->load->view('students_view');
				
			} else 
			{
				show_error($this->email->print_debugger());
			}
	}
}