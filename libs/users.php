<?php

include_once("all.php");
include_once("config/db.php");

class Users {

    public $userID;
    public $userFname;
    public $userLname;
    public $userEmail;
    public $userPassword;
    public $userActive;

    public function userLogin($username, $password) {  // The password is hashed with MD5.
     
            $query = "SELECT user_id , user_type , username FROM users WHERE username = '" . $username . "' AND password = '" . $password . "' AND is_active = '0'";
            $query_exe = mysql_query($query) or die('Error: '. mysql_error());

            $num_rows = mysql_num_rows($query_exe);
            if ($num_rows > 0) {
             return $query_exe;
            } else {
                return "NUF"; // No user found exception	
            }
   
    }

    public function getUserDetails($type , $userID){

        if($type == "lecturer"){

            $query = "SELECT f_name , s_name , email , phone_no FROM lecturers WHERE id = '".$userID."'";
            return $query_exe = mysql_query($query);


        }else if($type == "student"){


            $query = "SELECT firstname , lastname , student_email , location FROM students WHERE id = '".$userID."'";
            return $query_exe = mysql_query($query);
        }

    }

   

}

?>