<?php
include_once("../libs/all.php");
header('Content-type: application/json');
$utilities = new Utilities();
$API = new API();
$API->getUserData($utilities->sanitize($_GET['type']), $utilities->sanitize($_GET['userid']));


?>
