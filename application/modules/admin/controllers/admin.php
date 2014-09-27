
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
	}

	public function index()
	{
		$data['content_view'] = "admin_dashboard";
		$data['title'] = 'Administrators Section: Dashboard';

		$this->load->view('admin_template_view', $data);
	}

	public function lectures()
	{
		$data['content_view'] = "lecture_view";
		$data['title'] = 'Administrators Section: Lecturers';
		$data['courses'] = $this->createCourseDropdown();
		$data['lecture'] = $this->admin_model->get_lectures(); 

		$this->load->view('admin_template_view', $data);
	}

	public function students()
	{
		$data['content_view'] = "students_view";
		$data['title'] = 'Administrators Section: Sudents';
		$data['stude'] = $this->admin_model->get_students();

		$this->load->view('admin_template_view', $data);
	}

	function register_programs()
	{
		$data['content_view'] = "registerPrograms_view";
		$data['title'] = 'Administrators Section: Units';
		$data['courses'] = $this->admin_model->get_courses();

		$this->load->view('admin_template_view', $data);
	}

	public function units()
	{
		
	}

	// function add()
	// {
	// 	// $this->createCoursesSection();
		
	// 	$this->load->view('admin');
	// }

		function add_lecturer()
	{
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
		// print_r($this->upload->do_upload('photos'));die;
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

			$this->m_admin->addStudent($path);
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
			
			$this->units();
				
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
		$data['courses'] = $this->createCourseDropdown();
		$data['content_view'] = "addTimetable";
		$data['title'] = 'Administrators Section: Timetables';

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
				$this->uploadTimetable();
			}
			// echo "Success!";die;
		}
	}

	function admin_reg()
	{
		$data['content_view'] = "admin_view";
		$data['title'] = 'Administrators Section: Administrator';
		

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
}


?>


