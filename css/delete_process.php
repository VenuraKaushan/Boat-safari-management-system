<?php
include_once 'dataBase.php';
$sql = "DELETE FROM pay WHERE paymentid='" . $_GET["paymentid"] . "'";
if (mysqli_query($conn, $sql)) {
    
    header("Location: Payment main.php");
    echo"<script> alert('Payment cancellation successfully ✔')</script>";
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
