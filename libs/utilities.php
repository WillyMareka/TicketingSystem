<?php
include_once("all.php");

class Utilities{

public $randomPassword;

public function encryptData($data){
 
 return $encrypted_data = md5($data);
}


public function sessionGenerator(){
$token = 25489;
$token .= rand(2, 1545387887455412);
$token .= time();
$user_sessiontoken = $token;
return $user_sessiontoken;	
}

public function urlEncode($input){
return str_replace(" ", "%20", $input);
}


public function sanitize($input){
$formated = trim(addslashes($input));

return $formated;
}


public function getTimestamp(){
$time = date("Y-m-d H:i:s"); 
return $time;	
}


public function formatDate($date){
$arrayA = explode(" ", $date);
$arrayB = explode("-",$arrayA[0]);
$arrayC = explode(":",$arrayA[1]);

return mktime($arrayC[0], $arrayC[1], $arrayC[2], $arrayB[1], $arrayB[2], $arrayB[0]);
}

public function timePast($time){
$diff = time() - $time;
$years = floor($diff / (365*60*60*24));
$months = floor($diff / (30*60*60*24));
$days = floor($diff / (60*60*24));
$hours = floor($diff / (60*60));    
$minutes  = floor($diff / 60);
$seconds = $diff;   

if($years==0)
{
    if($months==0)
    {
        if($days==0)
        {
            if($hours==0)
            {
                if($minutes==0)
                {
                          if($seconds > 1){
                            $remark = "seconds ago"; 
                          }else{
                          $remark = "second ago";
                         }


                    return $when = $seconds.' '.$remark;
                }
                else
                {
                        if($minutes > 1){
                            $remark = "minutes ago"; 
                          }else{
                          $remark = "minute ago";
                         }
                    return $when = $minutes.' '.$remark;
                }
            }
            else
            {
                if($hours > 1){
                  $remark = "hours ago"; 
                  }else{
                  $remark = "hour ago";
                }

  

               return $when = $hours.' '.$remark.$min;
            }
        }
        else
        {
          if($days > 1){
           $remark = "days ago"; 
          }else{
            $remark = "day ago";
          }
            return $when = $days.' '.$remark;
        }
    }
    else
    {
         if($months > 1){
            $remark = "months ago"; 
            }else{
            $remark = "month ago";
          }
        return $when = $months.' '.$remark;
    }
}
else
{
    if($years > 1){
      $remark = "years ago"; 
       }else{
      $remark = "year ago";
      }
    return $when = $years.' '.$remark;
}  
}



public function randPassword(){

return $this->randomPassword = mt_rand(100000, 999999);

}




}


?>