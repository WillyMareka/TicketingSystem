<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_default extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');
    }

    function defaultfunction($param1, $param2)
    {
        
    }
}