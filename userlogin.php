<?php 
include "dbconn.php";

    if (isset($_POST['emailadd']) && isset($_POST['password'])) {

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $email = validate($_POST['emailadd']);
        $password = validate($_POST['password']);

        if (empty($email)) {
            header("Location: login.php?error=Email is empty!");
            exit();
        }
        elseif(empty($password)) {
            header("Location: login.php?error=Password is empty!");
            exit();
        }
        
        else { 
            $sql = "SELECT email, passWord FROM tbl_userclient WHERE email = '$email' AND passWord = '$password' UNION
            SELECT email, passWord FROM tbl_userlawyer WHERE email = '$email' AND passWord = '$password'";
            
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['email'] === $email && $row ['passWord'] === $password) {
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
        header("Location: login.php?");
        exit();
    }
?>