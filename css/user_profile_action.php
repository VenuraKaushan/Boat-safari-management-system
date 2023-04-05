<?php
session_start();
$con = mysqli_connect("localhost","root","","safari");

if(isset($_POST['update']))
{	
	
	$userid = $_POST['userid'];



    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $phonenumber= $_POST['phonenumber'];
    $dateOfBirth=$_POST['dateOfBirth'];
    
    
	$query = "UPDATE registration SET fname='$fname', lname='$lname', email='$email', phonenumber='$phonenumber', dateOfBirth='$dateOfBirth' WHERE userid='$userid'";
	
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {   
        header("Location: user_profile.php");
        $_SESSION['status'] = "Updated";
        echo "<script> alert('Sucessful payment ✔')</script>";
  
    }
	
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: user_profile.php");
	}
}

?>