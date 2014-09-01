<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_home extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');
    }

    function addContactDetails($data)
    {
		$asman = $this->db->insert('home_comments', $data);

		return $asman;
    }

}