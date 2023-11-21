<?php 

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'simple-blog');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$conn){
	die("Not Connected").mysqli_error();
}

?>