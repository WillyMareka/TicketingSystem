<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail_model extends CI_Model {

    function __construct()
    {
        
        parent::__construct();
    }

    function store_sent_email($recepient, $subject, $message, $tim)
    {
       $emails = array(
			'id' 		   =>   NULL,
			'recipients'   =>   $recepient,
			'subject'      =>   $subject,
			'message'      =>   $message,
			'date'   	   =>   $tim,
			'sent_status'  =>   1
			);

		$insert = $this->db->insert('mailerlog', $emails); 
    }
}