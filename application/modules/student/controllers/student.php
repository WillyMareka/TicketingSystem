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
		if($this->session->userdata('user_type') == 'student')
		{
			$data['student'] = $this->getStudentDetails();
			$data['title'] = "Student: Homepage";
			$data['content_view'] = "student";
			$this->load->view('student_template_view', $data);
		}
		else
		{
			redirect(base_url() .'error/log_in');
		}
	}

	function getStudentDetails()
	{
		$student = $this->m_student->getStudentDetails($this->session->userdata('username'));

		return $student;
	}

	function load_progress()
	{
		$data['student'] = $this->getStudentDetails();
		$data['title'] = "Student: Progress Report";
		$data['content_view'] = "progress";
		$this->load->view('student_template_view', $data);
	}
	function attendance()
	{
		$data['student'] = $this->getStudentDetails();
		$data['title'] = "Student: Attendance";
		$data['content_view'] = "attendance";
		$this->load->view('student_template_view', $data);
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
				$date = date('d-m-Y', strtotime($value['upload_date']));
				$time = date('h:i A', strtotime($value['upload_date']));
				if($value['type'] == 'xlsx')
				{
					$timetable_row .= '<div class="col-sm-6 col-md-3 test"><a href="'.$value['path'].'" class="thumbnail" download><img src="'.base_url().'assets/icons/excel.png" alt="'.$value['file_name'].'"></a>';
					$timetable_row .= '<div class="caption"><h3>'.$value['file_name'].'</h3><p>Uploaded on: '.$date.'</p><p>At: '.$time.'</p><p><a href="'.$value['path'].'" class="btn btn-success" role="button" download><i class = "fa fa-download"></i> Download</a> <a class = "btn btn-success share"><i class = "fa fa-share"></i> Share</a></p></div></div>';
				}
				else if($value['type'] == 'pdf')
				{
					$timetable_row .= '<div class="col-sm-6 col-md-3 test"><a href="'.$value['path'].'" class="thumbnail" download><img src="'.base_url().'assets/icons/pdf.png" alt="'.$value['file_name'].'"></a>';
					$timetable_row .= '<div class="caption"><h3>'.$value['file_name'].'</h3><p>Uploaded on: '.$date.'</p><p>At: '.$time.'</p><p><a href="'.$value['path'].'" class="btn btn-success" role="button" download><i class = "fa fa-download"></i> Download</a><a class = "btn btn-success share"><i class = "fa fa-share"></i> Share</a></p></div></div>';				
				}

				else if($value['type'] == 'pptx')
				{
					$timetable_row .= '<div class="col-sm-6 col-md-3 test"><a href="'.$value['path'].'" class="thumbnail" download><img src="'.base_url().'assets/icons/ppt.png" alt="'.$value['file_name'].'"></a>';
					$timetable_row .= '<div class="caption"><h3>'.$value['file_name'].'</h3><p>Uploaded on: '.$date.'</p><p>At: '.$time.'</p><p><a href="'.$value['path'].'" class="btn btn-success" role="button" download><i class = "fa fa-download"></i> Download</a><a class = "btn btn-success share"><i class = "fa fa-share"></i> Share</a></p></div></div>';
				}
				else if($value['type'] == 'docx')
				{
					$timetable_row .= '<div class="col-sm-6 col-md-3 test"><a href="'.$value['path'].'" class="thumbnail" download><img src="'.base_url().'assets/icons/word.png" alt="'.$value['file_name'].'"></a>';
					$timetable_row .= '<div class="caption"><h3>'.$value['file_name'].'</h3><p>Uploaded on: '.$date.'</p><p>At: '.$time.'</p><p><a href="'.$value['path'].'" class="btn btn-success" role="button" download><i class = "fa fa-download"></i> Download</a><a class = "btn btn-success share"><i class = "fa fa-share"></i> Share</a></p></div></div>';					
				}
			}
		}
		else
		{
			$timetable_row = "NO TIMETABLE FOUND FOR YOU";
		}

		$timetable_row .= "</div>";
		$data['title'] = "Student: Timetables";
		$data['content_view'] = "timetables";	
		$data['timetable_row'] = $timetable_row;
		$this->load->view('student_template_view', $data);
	}
	function notes()
	{
		$unit_list = '';
		$student_details = $this->getStudentDetails();
		$units = $this->m_student->getUnitsbyCourse($student_details['course_id']);
		$unit_list = '<div class = "row">';
		if ($units) {
			$unit_list .= '<div class = "list-group">';
			foreach ($units as $key => $value) {
				$unit_list .= '<a class = "list-group-item" href = "'.base_url().'student/elearning/'.$value['unit_id'].'">';
				$unit_list .= '<h4 class="list-group-item-heading">'.$value['unit_name'].'</h4>';
				$unit_list .= '<p>'.$this->m_student->getUnitLecturer($value['unit_id']).'</p></a>';
			}
			$unit_list .= '</div>';
		}
		else
		{
			$unit_list .= '<div class = "alert alert-info" role = "alert">You have no registered units</div>';
		}
		$unit_list .= '</div>';
		$data['unit_list'] = $unit_list;
		$data['student'] = $student_details;
		$data['title'] = "Student: Notes";
		$data['content_view'] = "notes";
		$this->load->view('student_template_view', $data);
	}

	function inbox()
	{
		$data['student'] = $this->getStudentDetails();
		$data['title'] = "Student: Inbox";
		$data['content_view'] = "inbox";
		$this->load->view('student_template_view', $data);
	}

	function elearning($unit_id)
	{
		$uploaded_notes = $this->m_student->getUploadedNotes($unit_id);
	}
}