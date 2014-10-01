<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_lecturers extends MY_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function lecturer_messages($lec_id=null, $subject = null,$message=null,$unit=null,$destination=null){
    	$destination = isset($destination)? $destination:'students';

    	$msg_data = array();
    	$message_data = array(
    		'lecturer_id' => $lec_id,
    		'destination'=> $destination,
    		'unit' => $unit,
    		'subject' => $subject,
    		'message' => $message
    		);

    	array_push($msg_data,$message_data);

    	$this->db->insert_batch('lecturer_messages',$msg_data);
    	return "SUCCESSFUL MESSAGE SENDING";
    }

    function defaultfunction($param1, $param2)
    {
        
    }

}