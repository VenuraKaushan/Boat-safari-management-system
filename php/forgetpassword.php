<?php
$Email = $_POST[Email];
$New_password = $_POST[New_password];
$Conf_password = $_POST[Conf_password];

$conn= new mysqli('localhost','root','','bsms');
if($conn -> connect_error){
    die('connection failed: '.$conn->connection_error);
}else{
    $stmt = $conn->prepare("insert into forgetpassword(Email, New_password, Conf_password)
    values(?,?)");
    $stmt -> bind_param("sss", $Email, $New_password, $Conf_password);
    $stmt -> execute();
    echo"password recorded successfully";
    $stmt -> close();
    $conn -> close();
}

?>