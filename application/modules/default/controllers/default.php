<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Default extends MX_Controller
{
	function index()
	{
		$this->load->view('default');
	}
}