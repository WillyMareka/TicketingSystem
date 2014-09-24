<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lecturer extends MX_Controller
{
	function index()
	{
		$data = array();
		$data['nyangundi'] = "This is an attempt yo";
		$data['notification_1'] = "This is the first notification";
		$data['notification_2'] = "This is the second notification";
		$data['notification_3'] = "This is the third notification";
		$data['notification_4'] = "This is the fourth notification";
		$data['notification_4'] = "This is the fourth notification";
		$data['notification_5'] = "This is the fifth notification";
		$this->load->view('lec_home.php',$data);
	}
}