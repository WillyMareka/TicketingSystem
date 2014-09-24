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
		$data['lecture'] ; 

		$this->load->view('admin_template_view', $data);
	}

	public function students()
	{
		$data['content_view'] = "students_view";
		$data['title'] = 'Administrators Section: Sudents';
		$data['stude'] = $this->admin_model->get_students();

		$this->load->view('admin_template_view', $data);
	}
}


?>