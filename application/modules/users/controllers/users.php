<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MY_Controller
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('m_users');
    }
	function index()
	{
		$this->load->view('users');
	}

	function login()
	{
		$username = $this->input->post('username');
		$upass = $this->input->post('password');

		$hashed_password = $this->hash_pass($upass);

		$user = $this->m_users->get_user_details($username, $hashed_password);
		// print_r($user);die;
		// print_r( $user);exit;
		if($user)
		{
			$usertype = $user[0]['user_type'];
			$username = $user[0]['username'];

			if ($usertype == 'student') {
				$student = $this->m_users->getUser('students', $username);
				// print_r($student);die;
				$data['username'] = $student[0]['id'];
				$data['firstname'] = $student[0]['firstname'];
				$data['lastname'] = $student[0]['lastname'];
				$data['email'] = $student[0]['student_email'];
				$data['logged_in'] = TRUE;
				$data['user_type'] = $usertype;
				$this->session->set_userdata($data);

				$this->m_users->register_session();
				redirect(base_url() .'student');
			}elseif($usertype == 'lecturer') {
				// $this ->session->sess_destroy();
				$lecturer = $this->m_users->getUser('lecturers',$username);
				$course_id = $lecturer[0]['course'];
				$course = $this->m_users->getCourse($course_id);

				$data['username'] = $lecturer[0]['id'];
				$data['firstname'] = $lecturer[0]['f_name'];
				$data['secondname'] = $lecturer[0]['s_name'];
				$data['othernames'] = $lecturer[0]['o_names'];
				$data['dob'] = $lecturer[0]['dob'];
				$data['email'] = $lecturer[0]['email'];
				$data['photo'] = $lecturer[0]['profile_picture'];
				$data['status'] = $lecturer[0]['status'];
				$data['course'] = $course[0]['course_name'];
				$data['logged_in'] = TRUE;
				$data['user_type'] = $usertype;
				$this->session->set_userdata($data);

				//echo "<pre>";print_r($this->session->all_userdata());echo"</pre>";exit;
				$this->m_users->register_session();
				redirect(base_url() .'lecturer');
			}
		}
		else
		{

		}
	}
}