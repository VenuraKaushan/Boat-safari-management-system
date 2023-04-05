<?php
include_once "harshadatabase.php";
if(isset($_POST["signup"]))
{
	$name = $_POST["name"];
	$dateof_birth = $_POST["dateof_birth"];
	$email = $_POST["email"];
	$phone_number = $_POST["phone_number"];
	$choose_password = $_POST["choose_password"];
	$reenter_password = $_POST["reenter_password"];
	
	$sql = "INSERT INTO customer_list (name, dateof_birth, email, phone_number, choose_password, reenter_password)
	VALUES ('$name','$dateof_birth','$email','$phone_number','$choose_password','$reenter_password')";
	
	
	if (mysqli_query($conn, $sql)) {
		echo "New record Created successfully !";
	} else{
         echo "Error : "	. $sql ."<br>". mysql_error($conn);
	}
    mysqli_close($conn);
}
?>	
	