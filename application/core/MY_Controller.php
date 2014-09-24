<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends MX_Controller
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    function check_login()
    {
    	// print_r($this->session->userdata);die;
    	if($this->session->userdata('logged_in') == TRUE)
    	{
    		return TRUE;
    	}
    	else
    	{
    		return FALSE;
    	}
    }
	function hash_pass($upass)
	{
		return md5($upass);
	}

	function send_sms($numbers, $message)
	{
		$username = "john.otaalo@strathmore.edu";
    	$hash = "fe129d475098c8aa6b5ea738d81f1a4960f74af0";

	    // Configuration variables. Consult http://api.txtlocal.com/docs for more info.
	    $test = "0";

	    // Data for text message. This is the text message data.
	    $sender = "API Test"; // This is who the message appears to be from.
	    $numbers = "254711465071"; // A single number or a comma-seperated list of numbers
	    $message = "Hi Mbagathi";
	    // 612 chars or less
	    // A single number or a comma-seperated list of numbers
	    $message = urlencode($message);
	    $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	    $ch = curl_init('http://api.txtlocal.com/send/?');
	    curl_setopt($ch, CURLOPT_POST, true);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    $result = curl_exec($ch); // This is the result from the API
	    curl_close($ch);
	}
}