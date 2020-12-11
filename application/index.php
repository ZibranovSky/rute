<?php 
require 'sign/traffic.php';
$app_name = " | RUTE";
$modules = (isset($_GET['m']))?$_GET['m']:"welcome";
switch ($modules) {
 	case 'welcome': default: $title = "Welcome $app_name"; include 'pages/welcome.php'; break;
 	case 'page1': $title = "Page 1 $app_name"; include 'pages/page1/page1.php'; break;
 	

 } 



 ?>