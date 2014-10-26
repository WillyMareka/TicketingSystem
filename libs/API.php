<?php

include_once("all.php");

class API {

    private $codes = array(
        100 => 'Continue',
        101 => 'Switching Protocols',
        200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'Non-Authoritative Information',
        204 => 'No Content',
        205 => 'Reset Content',
        206 => 'Partial Content',
        300 => 'Multiple Choices',
        301 => 'Moved Permanently',
        302 => 'Found',
        303 => 'See Other',
        304 => 'Not Modified',
        305 => 'Use Proxy',
        306 => '(Unused)',
        307 => 'Temporary Redirect',
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Timeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Request Entity Too Large',
        414 => 'Request-URI Too Long',
        415 => 'Unsupported Media Type',
        416 => 'Requested Range Not Satisfiable',
        417 => 'Expectation Failed',
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version Not Supported'
    );

    function __construct() {
        $this->utilities = new Utilities();
        $this->userArray = array();
    }

    public function userLogin($email , $password){

        $users = new Users();
       

        $userLoginArray = $users->userLogin($email , $password);
        $numRows = mysql_num_rows($userLoginArray);

        if($numRows > 0){

                 while ($row = mysql_fetch_array($userLoginArray)) {
              
                      $ID = $row['user_id'];
                      $TYPE =  $row['user_type'];
                      $USERNAME = $row['username'];
                 }
                array_push( $this->userArray, array( 'status' => "SUCCESS" , 'user_id' => $USERNAME  , 'user_type' => $TYPE  ));
                echo '{ "userLogin":'.json_encode($this->userArray)."}";
        } else{

              array_push( $this->userArray, array( 'status' => 'FAILURE' ,'user_id' => "NULL" , 'user_type' => 'NULL' ));
                echo '{ "userLogin":'.json_encode($this->userArray)."}";

        }
  


    }

  public function getUserData($type , $userID){

        $users = new Users();
        $userInfoArray = $users->getUserDetails($type , $userID);
         while ($row = mysql_fetch_array($userInfoArray)) {
                   
                   if($type == "lecturer"){
                    $name = $row['f_name']." ".$row['s_name'];
                    $email = $row['email']; 
                    $phone = $row['phone_no'];
                   }else{
                    $name = $row['firstname']." ".$row['lastname'];
                    $email = $row['student_email']; 
                    $phone = $row['location'];
                   }
                
         }  
          array_push( $this->userArray, array( 'status' => "SUCCESS" , 'name' => $name  , 'email' => $email , 'phone' => $phone ));
         echo '{ "userData":'.json_encode($this->userArray)."}";


  }

}

?>