<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends MY_Controller
{
	public $firstfive;
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('m_student');
        // error_reporting(0);
        $logged_in = $this->check_login();
		if($logged_in == TRUE)
		{
			$data['student'] = $this->getStudentDetails();
			$course = $this->getStudentDetails()['course_id'];
			$this->firstfive = $this->getFiveLatestMessages('course');
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
			$course = $this->getStudentDetails()['course_id'];
			$data['firstfive'] = $this->firstfive;
			$data['message_count'] = $this->m_student->getMessageCount($course);
			$data['notifications'] = $this->m_student->getNotificationCount($course);
			$data['message'] = $this->createMessage();
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
		$progress = '';
		$course = $this->getStudentDetails()['course_id'];
		$data['message_count'] = $this->m_student->getMessageCount($course);
		$data['student'] = $this->getStudentDetails();
		$units = $this->m_student->getUnitsbyCourse($course);
		$data['firstfive'] = $this->firstfive;
		$marks = $this->m_student->getProgress($this->session->userdata('username'));
		$progress .= '<div class = "panel panel-success">';
		foreach ($units as $unit) {	
			$progress .= '<div class = "panel-heading bg-blue"><h3>'.$unit['unit_name'].'</h3></div>';
			$progress .= '<table class = "table table-bordered">';
			if($marks)
			{
				foreach ($marks as $mark) {
					if($mark['unit_id'] == $unit['unit_id'])
					{
						$progress .= '<tr><td>CAT 1</td><td>'.$mark['cat_1'].'</td></tr>';
						$progress .= '<tr><td>CAT 2</td><td>'.$mark['cat_2'].'</td></tr>';					
						$progress .= '<tr><td>FINAL EXAM</td><td>'.$mark['final'].'</td></tr>';
						$progress .= '<tr class = "bg-green"><td>UNIT AVERAGE</td><td>'.$mark['percentage'].'</td></tr>';
					}
				}
			}
			else
			{
				$progress .= '<h3 class = "text-center">No marks uploaded yet</h3>';
			}
			$progress .= '</table>';
		}
		$progress .= '</div>';
		$data['progress'] = $progress;
		$data['title'] = "Student: Progress Report";
		$data['content_view'] = "progress";
		$this->load->view('student_template_view', $data);
	}
	function attendance()
	{
		$course = $this->getStudentDetails()['course_id'];
		$data['message_count'] = $this->m_student->getMessageCount($course);
		$data['student'] = $this->getStudentDetails();
		$data['title'] = "Student: Attendance";
		$data['content_view'] = "attendance";
		$this->load->view('student_template_view', $data);
	}
	function timetables()
	{
		$course = $this->getStudentDetails()['course_id'];
		$data['message_count'] = $this->m_student->getMessageCount($course);
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
		$course = $this->getStudentDetails()['course_id'];
		$data['message_count'] = $this->m_student->getMessageCount($course);
		$unit_list = '';
		$student_details = $this->getStudentDetails();
		$units = $this->m_student->getUnitsbyCourse($student_details['course_id']);
		$unit_list = '<div class = "row">';
		if ($units) {
			$unit_list .= '<div class = "list-group">';
			foreach ($units as $key => $value) {
				$lec = $this->m_student->getUnitLecturer($value['unit_id']);
				
				$unit_list .= '<a class = "list-group-item" href = "'.base_url().'student/elearning/'.$value['unit_id'].'">';
				$unit_list .= '<h4 class="list-group-item-heading">'.$value['unit_name'].'</h4>';
				if(is_array($lec)){
					$unit_list .= '<p>'.$lec['name'].'</p></a>';
				}
				else
				{
					$unit_list .= '<p>'.$lec.'</p></a>';
				}
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
		$course = $this->getStudentDetails()['course_id'];
		$data['message_count'] = $this->m_student->getMessageCount($course);
		$message_section = '';
		$data['student'] = $this->getStudentDetails();
		$data['title'] = "Student: Inbox";
		$course = $this->getStudentDetails()['course_id'];
		$data['message_count'] = $this->m_student->getMessageCount($course);
		$messages = $this->m_student->getMessages($course);
		if($messages)
		{
			foreach ($messages as $message) {
				$lect = $this->m_student->getLecturerByID($message['lecturer_id']);
				$message_section .= '<a "><tr class = "unread"><td class="small-col"><input type="checkbox" /></td><td class="small-col"><i class="fa fa-star"></i></td>';
				$message_section .= '<td class = "name"><a href = "'.base_url().'student/view_message/'.$message['id'].'">'.$lect['f_name'].' ' .$lect['s_name']. '</a></td>';
				$message_section .= '<td class = "subject"><a href = "'.base_url().'student/view_message/'.$message['id'].'">'.$message['subject']. '</a></td>';
				$message_section .= '<td class = "time"><a href = "'.base_url().'student/view_message/'.$message['id'].'">'.$message['sent_on']. '</a></td>';
				$message_section .='</tr></a>';
			}
		}
		else
		{
			$message_section .= 'No messages for you';
		}
		$data['message_section'] = $message_section;
		$data['content_view'] = "inbox";
		$this->load->view('student_template_view', $data);
	}

	function elearning($unit_id)
	{
		$course = $this->getStudentDetails()['course_id'];
		$data['message_count'] = $this->m_student->getMessageCount($course);
		$unit_section = '';
		$uploaded_notes = $this->m_student->getUploadedNotes($unit_id);
		$unit = $this->m_student->get_unit($unit_id);
		$unit_name = $unit[0]['unit_name'];
		$lecturer = $this->m_student->getUnitLecturer($unit_id);
		
		$data['student'] = $this->getStudentDetails();
		if (is_array($lecturer)) {
			$description = $this->m_student->getTopicDescription($unit_id, $lecturer['lec_id']);
			if (is_array($description)) {
				$tobeshown = $description['description'];
			}
			else
			{
				$tobeshown = $description;
			}
			$topics = $this->m_student->getTopics();

			$unit_section .= '<div class = "box-header text-center"><strong><h3>'.$unit_name.'</h3></strong>';
			$unit_section .= '<p>By: <i>'.$lecturer['name'].'</i></p></div>';
			$unit_section .= '<div class = "row"><div class = "col-xs-2"><img class = "" src = "'.$lecturer['picture'].'" style = "width: 150px; height: 150px; margin: 0 0 5px 30px;"></div><div class = "col-md-10"><div><h4>'.$tobeshown.'</h4></div><div><p><i>-'.$lecturer['name'].'</p><p>Lecturer: '.$unit_name.'</i></p></div></div></div>';
			$unit_section .= '';
			$unit_section .= '<div class = "panel-group" id = "accordion">';
			$counter = 0;

			foreach ($topics as $topic) {
				$counter++;
				$unit_section .= '<div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse_'.$counter.'"><i class = "fa fa-calendar"></i> '.$topic['topic'].'<span class = "pull-right">Last Updated: '.$this->m_student->getlargestuploaddatebytopic($topic['topic_no'], $unit_id).'</span></a></h4></div>';
				$unit_section .= '<div id = "collapse_'.$counter.'" class="panel-collapse collapse in"><div class = "panel-body"><div class = "row">';
				foreach ($uploaded_notes as $upload) {
					if($topic['topic_no'] == $upload['topic_no'])
					{
						$unit_section .= '<div class = "col-sm-6 col-md-3"><div class = "thumbnail"><a href = "'.$upload['path'].'" target = "_BLANK"><img src = "'.base_url().'assets/icons/pdf.png"></a><div class = "caption"><h5>'.$upload['description'].'</h5></div></div></div>';
					}
				}
				$unit_section .= '</div></div></div>';
				$unit_section .= '</div>';
			}
			$unit_section .= '</div>';
			$data['title'] = "Elearning: Notes";
			$data['content_view'] = "elearning";
			$data['notes_section'] = $unit_section;
		}
		else
		{
			$data['title'] = "ACCESS DENIED";
			$data['content_view'] = "elearning_error";
			$data['notes_section'] = "Cannot view this unit. No lecturer assigned";
		}
		$this->load->view('student_template_view', $data);
	}

	function createMessage()
	{
		$course = $this->getStudentDetails()['course_id'];
		$notifications = $this->m_student->getNotifications($course);
		$notification_list = '';
		if($notifications)
		{
			$counter = 0;
			foreach ($notifications as $notification) {
				$counter++;
				if($counter <= 5)
				{
					$lecturer = $this->m_student->getLecturerByID($notification['sent_by']);
					$mydate = strtotime($notification['date_sent']);
					$date_sent = date("l, F j, Y", $mydate);
					$notification_list .= '<div class = "desc"><div class = "row"><div class = "col-md-4"><img src = "'.$lecturer['profile_picture'].'" style = "width: 60px; height: 60px;"/></div><div class = "col-md-8"><div class = "row"><div class = "thumb"><span class = "pull-left"><p><muted><i class="fa fa-clock-o"></i> '.$date_sent.'</muted><br/></p></span></div></div><div class = "row"><div class = "details"><p>'.$notification['notification_message'].'</p></div></div></div></div></div>';
				}
			}
		}
		else
		{
			$notification_list .= '<p>You have no Notifications</p>';
		}
		return  $notification_list;
	}

	function view_message($message_id)
	{
		$data['student'] = $this->getStudentDetails();
		$course = $this->getStudentDetails()['course_id'];
		$data['message_count'] = $this->m_student->getMessageCount($course);
		$data['firstfive'] = $this->firstfive;
		$messages = $this->m_student->getMessageById($message_id);
		$message_section = '';
		$lect = $this->m_student->getLecturerByID($messages[0]['lecturer_id']);

		foreach ($messages as $message) {
			// echo ($message);
			$message_section .= '<div class="panel panel-default"><div class = "panel-heading"><p><h4>Subject: '.$message['subject'].'</h4><p><p><small><i>'.$lect['f_name'].' '.$lect['s_name'].'</i> at '.$message['sent_on'].'</small></p></div>';
			$message_section .=  '<div class="panel-body">'.$message['message'].'</div></div>';
		}
		$data['message_section'] = $message_section;
		$data['title'] = "Message: " . $message['subject'];
		$data['content_view'] = "message";
		$this->load->view('student_template_view', $data);
	}

	function getFiveLatestMessages()
	{
		$message_section = '';
		$data['student'] = $this->getStudentDetails();
		$course = $this->getStudentDetails()['course_id'];
		$messages = $this->m_student->getMessages($course);

		foreach ($messages as $message) {
			$lect = $this->m_student->getLecturerByID($message['lecturer_id']);
			$message_section .= '<li><a href="'.base_url().'student/view_message/'.$message['id'].'"><span class="photo"><img alt="avatar" src="'.$lect['profile_picture'].'"></span>
                                <span class="subject">
                                <span class="from">'.$lect['f_name'].' ' .$lect['s_name']. '</span>
                                    <span class="time">'.$message['subject'].'</span>
                                    </span>
                                    <span class="message">'
                                       .substr($message['message'],0,10).'...';
                                    '</span>
                                </a>
                            </li>';
		}

		return $message_section;

	}
}