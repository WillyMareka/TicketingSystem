<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('m_home');
    }

	function index()
	{
		$data['usmanov'] = "Chrispine";
		$this->load->view('home', $data);
	}

	function addContact()
    {
    	// print_r($this->input->post());die;
    	$data = array(
	              'name'=>$this->input->post('contact_name'),
	              'email'=>$this->input->post('contact_email'),
	              'phonenumber'=>$this->input->post('contact_phonenumber'),
	              'comment'=>$this->input->post('contact_comment')
	            );

    	// echo json_encode($data);
    	$result = $this->m_home->addContactDetails($data);

    	echo 'Posted';
    }
}