
<?php if (! defined("BASEPATH")) exit("No direct access to the script allowed");

/**
* 
*/
class Admin extends MY_Controller
{
	
	public $data = array();
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('m_admin');

		 $logged_in = $this->check_login();
		if($logged_in == TRUE)
		{
			
			$data['content_view'] = "admin_dashboard";
			$data['title'] = 'Administrators Section: Dashboard';
		}
		else
		{
			redirect(base_url() .'home');
		}
	}

	
	public function index()
	{
		if ($this->session->userdata('user_type') == 'administrator') {
			$data['userdetails'] = $this->admin_model->admin_details($this->session->userdata('username'));
			$data['unit'] = $this->admin_model->unit_count();
			$data['course'] = $this->admin_model->course_count();
			$data['student'] = $this->admin_model->student_count();
			$data['lecturer'] = $this->admin_model->lecturer_count();
			$data['content_view'] = "admin_dashboard";
			$data['title'] = 'Administrators Section: Dashboard';
		}
		else
		{
			redirect(base_url() .'error/log_in');
		}

		$this->load->view('admin_template_view', $data);
	}

	public function lectures()
	{
		$data['userdetails'] = $this->admin_model->admin_details($this->session->userdata('username'));
		$data['content_view'] = "lecture_view";
		$data['title'] = 'Administrators Section: Lecturers';
		$data['courses'] = $this->createCourseDropdown();
		$data['lecture'] = $this->admin_model->get_lectures(); 
		$data['unit'] = $this->admin_model->unit_count();
		$data['course'] = $this->admin_model->course_count();
		$data['student'] = $this->admin_model->student_count();
		$data['lecturer'] = $this->admin_model->lecturer_count();

		$this->load->view('admin_template_view', $data);
	}

	public function students()
	{
		$data['userdetails'] = $this->admin_model->admin_details($this->session->userdata('username'));
		$data['content_view'] = "students_view";
		$data['title'] = 'Administrators Section: Sudents';
		$data['stude'] = $this->admin_model->get_students();
		$data['courses'] = $this->createCourseDropdown();
		$data['unit'] = $this->admin_model->unit_count();
		$data['course'] = $this->admin_model->course_count();
		$data['student'] = $this->admin_model->student_count();
		$data['lecturer'] = $this->admin_model->lecturer_count();


		$this->load->view('admin_template_view', $data);
	}

	function register_programs()
	{
		$data['userdetails'] = $this->admin_model->admin_details($this->session->userdata('username'));
		$data['content_view'] = "registerPrograms_view";
		$data['title'] = 'Administrators Section: Units';
		$data['courses'] = $this->admin_model->get_courses();
		$data['units'] = $this->admin_model->get_units();
		$data['lecturers'] = $this->admin_model->get_lectures();
		$data['unit'] = $this->admin_model->unit_count();
		$data['course'] = $this->admin_model->course_count();
		$data['student'] = $this->admin_model->student_count();
		$data['lecturer'] = $this->admin_model->lecturer_count();


		$this->load->view('admin_template_view', $data);
	}

	public function courses()
	{
		$data['userdetails'] = $this->admin_model->admin_details($this->session->userdata('username'));
		$data['content_view'] = "courses_view";
		$data['title'] = 'Administrators Section: Courses';
		$data['courses'] = $this->admin_model->get_courses();
		$data['unit'] = $this->admin_model->unit_count();
		$data['course'] = $this->admin_model->course_count();
		$data['student'] = $this->admin_model->student_count();
		$data['lecturer'] = $this->admin_model->lecturer_count();


		$this->load->view('admin_template_view', $data);
	}

	public function units()
	{
		$data['userdetails'] = $this->admin_model->admin_details($this->session->userdata('username'));
		$data['content_view'] = "units_view";
		$data['title'] = 'Administrators Section: Units';
		$data['units'] = $this->admin_model->get_units();
		$data['unit'] = $this->admin_model->unit_count();
		$data['course'] = $this->admin_model->course_count();
		$data['student'] = $this->admin_model->student_count();
		$data['lecturer'] = $this->admin_model->lecturer_count();


		$this->load->view('admin_template_view', $data);
	}

	// function add()
	// {
	// 	// $this->createCoursesSection();
		
	// 	$this->load->view('admin');
	// }

		function add_lecturer()
	{
		$data['userdetails'] = $this->admin_model->admin_details($this->session->userdata('username'));
		// $this->createCoursesSection();
		$data['courses'] = $this ->m_admin->getAllCourses();
		$this->load->view('add_lecturer',$data);
	}

	public function addLecturer()
	{
		// print_r($this->input->post());die;
		$path = '';
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		// print_r($this->upload->do_upload('photos'));die;
		if ( ! $this->upload->do_upload('lec_photo'))
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);die;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			foreach ($data as $key => $value) {
				$path = base_url().'upload/'.$value['file_name'];
			}

			$this->admin_model->add_lec($path);

			redirect('admin/lectures');
			// echo "Success!";die;
		}
		// $this->m_admin->addStudent();
	}


	public function addStudent()
	{
		// print_r($this->input->post());die;
		$path = '';
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		//print_r($this->upload->do_upload('photos'));die;
		if ( ! $this->upload->do_upload('photos'))
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);die;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			foreach ($data as $key => $value) {
				$path = base_url().'upload/'.$value['file_name'];
			}

			$this->admin_model->addStudent($path);
			redirect('admin/students');
			// echo "Success!";die;
		}
		// $this->m_admin->addStudent();
	}

	public function addCourse()
	{
		$this->form_validation->set_rules('course_name', 'Course Name', 'trim|required');
		$this->form_validation->set_rules('course_code', 'Unit Name', 'trim|required');
		$this->form_validation->set_rules('Decription', 'Unit Code', 'trim|required');	

		if ($this->form_validation->run() == FALSE) 
		{
			echo "The form validation process was failed!!!";
            $this->register_programs();
		} else 
		{
			// echo "The form validation was very successfull";
           	$this->admin_model->addCourses();
			
			$this->register_programs();
				
		}
	}

	function register_units()
	{
		$this->form_validation->set_rules('course', 'Course Name', 'trim|required');
		$this->form_validation->set_rules('unit_name', 'Unit Name', 'trim|required');
		$this->form_validation->set_rules('unit_code', 'Unit Code', 'trim|required');
		
        
        if ($this->form_validation->run() == FALSE) 
		{
			echo "The form validation process was failed!!!";
            $this->register_programs();
		} else 
		{
			// echo "The form validation was very successfull";
           	$this->admin_model->addUnits();
			
			$this->units();
				
		}
		
	}

	public function createCoursesSection()
	{
		$course_section = '';
		$course_section = $this->admin_model->getAllCourses();

		$course .= '<select name = "course">';
		foreach ($courses as $key => $value) {
			$course_section .= '<option value = '.$value['course_id'].'>'.$value['course_name'].'</option>';
		}
		$course_section .= '</select>';

		echo $course_section;die;
	}

	public function Timetable()
	{
		$data['userdetails'] = $this->admin_model->admin_details($this->session->userdata('username'));
		$data['courses'] = $this->createCourseDropdown();
		$data['timetables'] = $this->admin_model->get_timetables();
		$data['content_view'] = "addTimetable";
		$data['title'] = 'Administrators Section: Timetables';
		$data['unit'] = $this->admin_model->unit_count();
		$data['course'] = $this->admin_model->course_count();
		$data['student'] = $this->admin_model->student_count();
		$data['lecturer'] = $this->admin_model->lecturer_count();

		$this->load->view('admin_template_view', $data);
	}

	function uploadtime()
	{
		// var_dump($_FILES);die;
		$data['courses'] = $this->createCourseDropdown();
		$path = '';
		$config['upload_path'] = './upload/timetables/';
		$config['allowed_types'] = 'docx|xlsx|pdf|xls|ppt|pptx';
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
				$path = base_url().'upload/timetables/'.$value['file_name'];
				$file_type = $value['file_type'];
				$arr = explode(".", $value['file_name'], 2);
				$file_type = $arr[1];
			}

			$result = $this->m_admin->addTimetable($path, $file_type);

			if ($result) {
				$this->Timetable();
			}
			// echo "Success!";die;
		}
	}

	function admin_reg()
	{
		$data['userdetails'] = $this->admin_model->admin_details($this->session->userdata('username'));
		$data['content_view'] = "admin_view";
		$data['title'] = 'Administrators Section: Administrator';
		$data['unit'] = $this->admin_model->unit_count();
		$data['course'] = $this->admin_model->course_count();
		$data['student'] = $this->admin_model->student_count();
		$data['lecturer'] = $this->admin_model->lecturer_count();
		

		$this->load->view('admin_template_view', $data);
	}

	function addAdmin()
	{
		// print_r($this->input->post());die;
		$path = '';
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		// print_r($this->upload->do_upload('photos'));die;
		if ( ! $this->upload->do_upload('lec_photo'))
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);die;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			foreach ($data as $key => $value) {
				$path = base_url().'upload/'.$value['file_name'];
			}

			$this->admin_model->add_admin($path);
			// echo "Success!";die;
		}
		// $this->m_admin->addStudent();
	}

	function assign()
	{
		$this->form_validation->set_rules('unit_id', 'Unit ID', 'trim|required');
		$this->form_validation->set_rules('lect_id', 'Lecturer ID', 'trim|required');

		 if ($this->form_validation->run() == FALSE) 
		{
			echo "The form validation process was failed!!!";
            $this->register_programs();
		} else 
		{
			// echo "The form validation was very successfull";
           	$this->admin_model->assign_unit();
			
			$this->register_programs();
				
		}
		
	}

	function editStudent()
	{
		$this->form_validation->set_rules('f_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('s_name', 'Second Name', 'trim|required');
		$this->form_validation->set_rules('o_name', 'Other Names', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
		$this->form_validation->set_rules('semail', 'Email', 'trim|required');
		$this->form_validation->set_rules('local', 'Lcoation', 'trim|required');


		if ($this->form_validation->run() == FALSE) 
		{
			echo "The form validation process was failed!!!";
            $this->students();
		} else 
		{
			// echo "The form validation was very successfull";
           	$this->admin_model->update_student();
			
			$this->students();
				
		}
	}

	function editLecturer()
	{
		
		$this->form_validation->set_rules('f_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('s_name', 'Second Name', 'trim|required');
		$this->form_validation->set_rules('o_name', 'Other Names', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
		$this->form_validation->set_rules('lemail', 'Email', 'trim|required');
		

		if ($this->form_validation->run() == FALSE) 
		{
			echo "The form validation process was failed!!!";
            $this->lectures();
		} else 
		{
			// echo "The form validation was very successfull";
           	$this->admin_model->update_lecturer();
			
			redirect('admin/lectures');
				
		}
	}

	function deactivate($table, $id)
	{

		$sql = "UPDATE
						`$table`
					SET
						`status` = 0
					WHERE 
						`id` = '$id'";

		$this->db->query($sql);

		if ($table == "lecturers") {
			//$this->lectures();
			redirect('admin/lectures');
		}else if ($table == "students") {
			//$this->students();
			redirect('admin/students');
		}
	
	}

	function quick_mail()
	{
		$this->form_validation->set_rules('recipient', 'Recipients', 'trim|required');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
		$this->form_validation->set_rules('message', 'Message', 'trim|required');
		
		if ($this->form_validation->run() == FALSE) 
		{
			echo "The form validation process was failed!!!";
            redirect('admin');
		} else 
		{
			$rec = $this->input->post('recipient');
			$sub = $this->input->post('subject');
			$msg = $this->input->post('message');
			// echo "The form validation was very successfull";
           	$this->admin_email($rec, $sub, $msg);
			
			redirect('admin');
				
		}
		
	}

	function admin_email($email, $subject, $message)
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
		$this->email->subject($subject.' (Administrator)');
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


?>


