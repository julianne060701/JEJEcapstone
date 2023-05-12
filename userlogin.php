<?php
include "dbconn.php";

    if (isset($_POST['email']) && isset($_POST['password'])) {

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $email = validate($_POST['email']);
        $password = validate($_POST['password']);
        
        if (empty($email)) {
            header("Location: homepage.php?error=Email cannot be empty!");
            exit();
        } elseif (empty($password)) {
            header("Location: homepage.php?error=Password cannot be empty!");
            exit();
        } else {

             // check if credentials are okay, and email is verified
             $sql = "SELECT * FROM tbl_cred WHERE email = '" . $email . "'";
             $result = mysqli_query($conn, $sql);
     
             if (mysqli_num_rows($result) == 0)
             {
                 header("Location:homepage.php?error= Email is not found.");
             }
     
             $user = mysqli_fetch_object($result);
     
             if (!password_verify($password, $user->password))
             {
                 header("Location: homepage.php?error=Incorrect password");
                 exit();
             }
     
             if ($user->email_verified_at == null)
             {
                 die("Please verify your email <a href='OTP.php?email=" . $email . "'>from here</a>");
             }
     
             header("Location: Dashboard.php");
             exit();
        }
}
?>