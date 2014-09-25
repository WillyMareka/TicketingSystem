<?php if (! defined("BASEPATH")) exit("No direct access to the script allowed"); 

/**
* 
*/
class Template extends MY_Controller
{
	
	function __construct()
	{
		
	}

	public function index()
	{
		$this->load->view("template_view");
	}
}

?>