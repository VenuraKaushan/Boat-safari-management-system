<?php
   
   if (isset($_POST['uname']) && isset($_POST['password'])){
       function validate($data){

            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

        return $data;
       }

       $uname = validate($_POST['uname']);
       $pass = validate($_POST['password']);

       if (empty($uname)) {
        header("Location: Login page.php?error= User Name is required");
        exit();

       }else if(empty($pass)){
        header("Location: Login page.php?error= Password is required");
        exit();

       }else{
           echo "valid input";
       }

   }else{
       header("Location: Login page.php?error");
       exit();
   }

?>

