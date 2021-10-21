<?php
//Start Session
session_start();
//Create Constants to Store Non Repeating Values
define('URL', 'http://localhost:8080/CSE485_K61_KTGK_1951060807/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'ngoclinh741');
define('DB_NAME', 'db_qlnhm');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_connect_error()); //Database Connection
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_connect_error()); //SElecting Database
