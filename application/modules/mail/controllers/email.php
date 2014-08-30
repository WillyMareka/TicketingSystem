<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends MX_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('default');
	}

	public function send_email($recepient, $subject, $message)
	{
		$time=date('Y-m-d');
		
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => "chrisrichards@gmail.com",
			'smtp_pass' => "bakasaSUN"
			);
		
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('lims.eidvl@gmail.com', 'EID LIMS');
		$this->email->to($recepient);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->set_mailtype("html");
		
		
		if($this->email->send())
			{	

				
			} else 
			{
				show_error($this->email->print_debugger());
			}
		
	}
}