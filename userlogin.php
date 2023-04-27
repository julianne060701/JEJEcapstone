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
            $sql = "SELECT 'admin' AS user_type, userName AS email, passWord AS password FROM tbl_useradmin WHERE userName = '$email' AND passWord = '$password' 
                    UNION 
                    SELECT 'cred' AS user_type, email, password FROM tbl_cred WHERE email = '$email' AND password = '$password'";
        
            $result = mysqli_query($conn, $sql);
        
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['user_type'] === 'admin') {
                    header("Location: Dashboard.php?Login Successfully");
                    exit();
                } else {
                    header("Location: userHomePage.php?");
                    exit();
                }
            } else {
                header("Location: homepage.php?error=Incorrect email or password!");
                exit();
            }
        }  
    } else {
        header("Location: homepage.php?");
        exit();
    }
?>