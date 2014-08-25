<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MX_Controller
{
	function index()
	{
		$this->load->view('users');
	}
}