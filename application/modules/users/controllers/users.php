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
				// $this ->session->sess_destroy();
		$username = $this->input->post('username');
		$upass = $this->input->post('password');

		$hashed_password = $this->hash_pass($upass);

		$user = $this->m_users->get_user_details($username, $hashed_password);
		// print_r($user);die;

		if($user)
		{
			$usertype = $user[0]['user_type'];
			$username = $user[0]['username'];

			if ($usertype == 'student') {
				$student = $this->m_users->getUser('students', $username);
				// print_r($student);die;
<<<<<<< HEAD
				$data['username'] = $student[0]['id'];
				$data['firstname'] = $student[0]['firstname'];
				$data['lastname'] = $student[0]['lastname'];
				$data['email'] = $student[0]['student_email'];
				$data['logged_in'] = TRUE;
				$data['user_type'] = $usertype;
				$this->session->set_userdata($data);

				$this->m_users->register_session();
				redirect(base_url() .'student');
=======
				if($student)
				{
					$data['username'] = $student[0]['id'];
					$data['firstname'] = $student[0]['firstname'];
					$data['lastname'] = $student[0]['lastname'];
					$data['email'] = $student[0]['student_email'];
					$data['logged_in'] = TRUE;
					$data['user_type'] = $usertype;
					$this->session->set_userdata($data);
					$data['username'] = $student[0]['id'];
					$data['firstname'] = $student[0]['firstname'];
					$data['lastname'] = $student[0]['lastname'];
					$data['email'] = $student[0]['student_email'];
					$data['logged_in'] = TRUE;
					$data['user_type'] = $usertype;
					$this->session->set_userdata($data);

					$this->m_users->register_session();
					redirect(base_url() .'student');
				}
				else
				{
					redirect(base_url(). 'home/error');
				}
			}elseif($usertype == 'lecturer') {
				// $this ->session->sess_destroy();
				$lecturer = $this->m_users->getUser('lecturers',$username);

				// course
				if($lecturer)
				{

					$course = $this->m_users->getCourse($lecturer[0]['course']);
					// echo "<pre>";print_r($lecturer);echo "</pre>"; exit; 
					// $unit = $this->m_users->get_unit($lecturer[0]['unit_code']);
					
					//echo "<pre>";print_r($course);echo "</pre>"; exit; 
					// echo"<pre>"; print_r($unit);echo"<pre>";die;
					$data['username'] = $lecturer[0]['id'];
					$data['firstname'] = $lecturer[0]['f_name'];
					$data['secondname'] = $lecturer[0]['s_name'];
					$data['othernames'] = $lecturer[0]['o_names'];
					$data['dob'] = $lecturer[0]['dob'];
					$data['email'] = $lecturer[0]['email'];
					$data['photo'] = $lecturer[0]['profile_picture'];
					$data['status'] = $lecturer[0]['status'];
					$data['course'] = $course[0]['course_name'];
					$data['course_id'] = $course[0]['course_id'];
					$data['unit_code'] = $lecturer[0]['unit_code'];
					$data['unit'] = $unit[0]['unit_name'];
					$data['logged_in'] = TRUE;
					$data['user_type'] = $usertype;
					$this->session->set_userdata($data);

					$this->m_users->register_session();
					redirect(base_url() .'lecturer');
				}
				else
				{
					redirect(base_url(). 'home/error');
				}
			}
			else if ($usertype == 'administrator') {
				$admin = $this->m_users->getUser('administrator', $username);
				// print_r($admin);die;
				if($admin)
				{
					$data['username'] = $admin[0]['id'];
					$data['firstname'] = $admin[0]['f_name'];
					$data['lastname'] = $admin[0]['l_name'];
					$data['email'] = $admin[0]['email'];
					$data['logged_in'] = TRUE;
					$data['user_type'] = $usertype;
					$this->session->set_userdata($data);
	
					$this->m_users->register_session();
					redirect(base_url() .'admin');
				}
				else
				{
					redirect(base_url(). 'home/error');
				}
>>>>>>> f1cf4ba1f853a67adc529f05de5fb0041e316fa9
			}
		}
		else
		{
			redirect(base_url(). 'home/error');
		}
	}
}