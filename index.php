<?php
//echo "<pre>";
//print_r($_SERVER);exit;
session_start();
define('BASE_URL','http://192.168.10.98/ERP/');
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include './route.php';
?>

