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
            header("Location: homepage.php?error=Email is required!");
            exit();
        }
        elseif (empty($password)) {
            header("Location: homepage.php?error=Password is required!");
            exit();
        }

        else {

            $sql = "SELECT email, password FROM tbl_cred WHERE email = '$email' AND password = '$password' UNION
            SELECT email, password FROM tbl_cred WHERE email = '$email' AND password = '$password'";
            
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['email'] === $email && $row ['password'] === $password) {
                    //redirect to homepage
                    echo "Login Successfully";
                }
            }
            
            else {
                header("Location: login.php?error=Incorrenct email or password!");
                exit();
            }
        }
    }
    else {
        header("Location: homepage.php?");
        exit();
    }
?>