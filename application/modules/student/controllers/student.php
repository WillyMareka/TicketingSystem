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

	function load_progress()
	{
		$data['student'] = $this->getStudentDetails();
		$this->load->view('progress', $data);
	}
	function attendance()
	{
		$data['student'] = $this->getStudentDetails();
		$this->load->view('attendance', $data);
	}
	function timetables()
	{
		$data['student'] = $this->getStudentDetails();
		$this->load->view('timetables', $data);
	}
	function notes()
	{
		$data['student'] = $this->getStudentDetails();
		$this->load->view('notes', $data);
	}

	function inbox()
	{
		$data['student'] = $this->getStudentDetails();
		print_r($data);die;
		$this->load->view('inbox', $data);
	}
}