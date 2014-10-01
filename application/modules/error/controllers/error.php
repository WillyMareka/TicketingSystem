<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends MY_Controller
{
	function index()
	{
	}

	function log_in()
	{
		$this->load->view('restriction');
	}
}