<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('m_admin');
    }
	function index()
	{
		// $this->createCoursesSection();
		
		$this->load->view('admin');
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

	public function createCoursesSection()
	{
		$course_section = '';
		$course_section = $this->m_admin->getAllCourses();

		$course .= '<select name = "course">';
		foreach ($courses as $key => $value) {
			$course_section .= '<option value = '.$value['course_id'].'>'.$value['course_name'].'</option>';
		}
		$course_section .= '</select>';

		echo $course_section;die;
	}
}