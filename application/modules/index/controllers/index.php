<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends MX_Controller
{
	function index()
	{
		$this->load->view('index');
	}
}