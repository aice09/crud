<?php
session_start();

// Connection variables 
$host = "localhost"; // MySQL host name eg. localhost
$user = "root"; // MySQL user. eg. root ( if your on localserver)
$password = "anonymous"; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "project_coffee"; // MySQL Database name
$port = "3306"; // Default Port
//$database1 = "project_verde";


// Connect to MySQL Database 
$db = mysqli_connect($host, $user, $password,$database,$port) or die("Could not connect to database");
//$db1 = mysqli_connect($host, $user, $password,$database1) or die("Could not connect to database");

date_default_timezone_set('Asia/Manila'); //Default Timezone
$currentdate = date('m/d/Y H:i:s'); //Current Date
$currentdate2 = date('m/d/Y h:i A', strtotime($currentdate)); //Current Date With AM & PM

?> 