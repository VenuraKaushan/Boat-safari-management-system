<?php
$servername="localhost";
$username="root";
$password="";
$dbname="signup_db";
$conn = mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
	die('could not connect my sql:' .mysqli_connect_error());
}
?>	