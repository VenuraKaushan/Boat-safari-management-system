<?php
    require "dataBase.php";

    

    if(isset($_POST['login'])){

        $errors = array();

        if(!isset($_POST['empID']) || strlen(trim($_POST['empID'])) < 1){
            $errors[] = "employee id is missing / invalid";
            header('location:adminloginpage.php?error=employee id is missing / invalid');
        }

        if(!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1){
            $errors[] = "password is missing / invalid";
            header('location:adminloginpage.php?error="password is missing / invalid"');
        }

        if(empty($errors)){
            $username = mysqli_real_escape_string($conn, $_POST['empID']);

            $password = mysqli_real_escape_string($conn, $_POST['password']);

            $query = "SELECT * FROM admin_login WHERE Employee_ID = '{$username}' AND password = '{$password}' LIMIT 1";

            $result = mysqli_query($conn, $query);

            if($result){
                
                if(mysqli_num_rows($result) == 1){
                    header('location:../admin setting.html');
                    
                }else{
                    $errors = "Invalid username/ password";
                    header('location:adminloginpage.php?error="Invalid username/ password"');
                }
            }else{
                $errors = "database query faild";
                header('location:adminloginpage.php?error="database query faild"');
            }
        }


}       

?>

