<?php
include_once("constants.php");
class db_config{
private $connection;

function __construct(){
$this->my_connect();	
}

public function my_connect(){
try{	
$this->connection  = mysql_connect(DB_SERVER,DB_USER,DB_PASS);	
if(!$this->connection) {                                              
echo "No database connection available";	
}	
else {
$sel_db = mysql_select_db(DB_NAME,$this->connection);
if(!$sel_db) {	
echo "Error Selecting Database";
    }
  }	
} catch(Exception $e){
throw new Exception("Error communicating to database server, please refresh the page!!", 1,$e);
}

}






}

$database = new db_config();




?>