<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
		
		$this->load->model('mail_model');
	}

	function index()
	{
		$this->load->view('email_view');
	}

	public function email_details()
	{
		$recepient 	= $this->input->post('recipient');
		$subject 	= $this->input->post('subject');
		$message 	= $this->input->post('message');

		$this->send_email($recepient, $subject, $message);
	}

	public function send_email($recepient, $subject, $message)
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

		$this->email->from('chrisrichrads@gmail.com', 'SU Notification');
		$this->email->to($recepient);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->set_mailtype("html");
		
		
		if($this->email->send())
			{	
				$this->mail_model->store_sent_email($recepient, $subject, $message, $time);
				
			} else 
			{
				show_error($this->email->print_debugger());
			}
		
	}
}