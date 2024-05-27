<?php 

session_start(); //start session
$_SESSION = array();

//unset/remove session
session_destroy();

header("Location: login.php");

exit;


?>