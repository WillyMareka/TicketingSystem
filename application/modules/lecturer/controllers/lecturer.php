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

		$data['messages_no'] = 35;
		
		$this->load->view('lec_home.php',$data);
	}
	function page_to_load($selection = null){
		if ($selection == "messages") {
			$this ->load->view('message.php');
		}elseif ($selection == "charts") {
			$this ->load->view('charts.php');
		}elseif ($selection == "tasks") {
			$this ->load->view('task.php');
		}elseif ($selection == "forms") {
			$this ->load->view('form.php');
		}elseif ($selection == "activity") {
			$this ->load->view('activity.php');
		}
	}
}