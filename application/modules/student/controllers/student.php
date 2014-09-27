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
		$timetable_row = '';
		$timetable = $this->m_student->getTimetables($data['student']['course_id']);
		$timetable_row = '<div class = "row">';
		if($timetable)
		{
			foreach ($timetable as $key => $value) {

				if($value['type'] == 'xlsx')
				{
					$timetable_row .= '<div class="col-sm-6 col-md-3"><a href="'.$value['path'].'" class="thumbnail" download><img src="'.base_url().'assets/icons/excel.png" alt="'.$value['file_name'].'"></a>';
					$timetable_row .= '<div class="caption"><h3>'.$value['file_name'].'</h3><p>Uploaded on: '.$value['upload_date'].'</p><p><a href="'.$value['path'].'" class="btn btn-default" role="button" download><i class = "fa fa-download"></i></a></p></div></div>';
				}
				else if($value['type'] == 'pdf')
				{
					$timetable_row .= '<div class="col-sm-6 col-md-3"><a href="'.$value['path'].'" class="thumbnail" download><img src="'.base_url().'assets/icons/pdf.png" alt="'.$value['file_name'].'"></a>';
					$timetable_row .= '<div class="caption"><h3>'.$value['file_name'].'</h3><p>Uploaded on: '.$value['upload_date'].'</p><p><a href="'.$value['path'].'" class="btn btn-default" role="button" download><i class = "fa fa-download"></i></a></p></div></div>';				
				}

				else if($value['type'] == 'pptx')
				{
					$timetable_row .= '<div class="col-sm-6 col-md-3"><a href="'.$value['path'].'" class="thumbnail" download><img src="'.base_url().'assets/icons/ppt.png" alt="'.$value['file_name'].'"></a>';
					$timetable_row .= '<div class="caption"><h3>'.$value['file_name'].'</h3><p>Uploaded on: '.$value['upload_date'].'</p><p><a href="'.$value['path'].'" class="btn btn-default" role="button" download><i class = "fa fa-download"></i></a></p></div></div>';
				}
				else if($value['type'] == 'docx')
				{
					$timetable_row .= '<div class="col-sm-6 col-md-3"><a href="'.$value['path'].'" class="thumbnail" download><img src="'.base_url().'assets/icons/word.png" alt="'.$value['file_name'].'"></a>';
					$timetable_row .= '<div class="caption"><h3>'.$value['file_name'].'</h3><p>Uploaded on: '.$value['upload_date'].'</p><p><a href="'.$value['path'].'" class="btn btn-default" role="button" download><i class = "fa fa-download"></i></a></p></div></div>';					
				}
			}
		}
		else
		{
			$timetable_row = "NO TIMETABLE FOUND FOR YOU";
		}

		$timetable_row .= "</div>";
		$data['timetable_row'] = $timetable_row;
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
		$this->load->view('inbox', $data);
	}
}