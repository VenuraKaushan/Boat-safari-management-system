<?php
   
   include 'kasundataBase.php';
 
  if(isset($_POST['paynow'])){
       
    $name = $_POST['name'];
    $no = $_POST['no'];
    $date = $_POST['date'];
    $cvv = $_POST['cvv'];

    $sql = "INSERT INTO pay (name,no,date,cvv) VALUES ('$name','$no','$date','$cvv')";

    if(mysqli_query($conn,$sql)) {

      header("Location: payment_r.php");
      echo "<script> alert('Sucessful payment ✔')</script>";
    

      

      

    }else{
      echo "faild";
    }
    mysqli_close($conn);
  }


?>