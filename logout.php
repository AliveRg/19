<?php 

include './connect.php';
$_SESSION = array();
session_destroy();
header('Location: ./index.php');

?>