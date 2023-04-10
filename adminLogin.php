<?php 
include "dbconn.php";

   if (isset($_POST['username']) && isset($_POST['password'])){

       function validate($data){
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
       }

       $username = validate($_POST['username']);
       $password = validate($_POST['password']);

       if (empty($username)) {
           header("Location: Admin.php?error=Username is empty!");
           exit();
       }
       elseif (empty($password)) {
           header("Location: Admin.php?error=Password is empty!");
           exit();
       } else{
        $sql = "SELECT * FROM tbl_useradmin WHERE userName = '$username' AND passWord = '$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if ($row['userName'] === $username && $row ['passWord'] === $password) {

                header("Location: Dashboard.php");
            } 
        }
        else {
            header("Location: Admin.php?error=Incorrect username or password!");
            exit();
        }
       }

   } else {
    header("Location: Admin.php;");
    exit();
   }
   
  
   
   ?>