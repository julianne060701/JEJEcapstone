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
            header("Location: homepage.php?error=Email is empty!");
            exit();
        }
        elseif(empty($password)) {
            header("Location: homepage.php?error=Password is empty!");
            exit();
        }

        else {
            $sql = "SELECT email, passWord FROM tbl_userinfo WHERE email = '$email' AND passWord = '$password' UNION
            SELECT email, passWord FROM tbl_usercredentials WHERE passWord = '$password'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['email'] === $email && $row ['passWord'] === $password) {
                    echo "Login Successfully";
                }
            }
            else {
                header("Location: homepage.php?error=Incorrect email or password!");
                exit();
            }
        }
    }
    else {
        header("Location: homepage.php?");
        exit();
    }
?>