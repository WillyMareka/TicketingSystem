<?php
include_once("../libs/all.php");
header('Content-type: application/json');
$utilities = new Utilities();
$API = new API();

$API->userLogin($utilities->sanitize($_GET['username']), md5($utilities->sanitize($_GET['password'])));

?>