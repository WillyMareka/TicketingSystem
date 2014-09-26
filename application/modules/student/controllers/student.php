<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends MY_Controller
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('m_student');
        $logged_in = $this->check_login();
		if($logged_in == TRUE)
		{
			$data['student'] = $this->getStudentDetails();
			
		}
		else
		{
			redirect(base_url() .'home');
		}
    }
	function index()
	{
		$data['student'] = $this->getStudentDetails();
		$this->load->view('student', $data);
	}

	function getStudentDetails()
	{
		$student = $this->m_student->getStudentDetails($this->session->userdata('username'));

		return $student;

	}
}