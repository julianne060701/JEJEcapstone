<?php
session_start();
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
    } elseif (empty($password)) {
        header("Location: homepage.php?error=Password cannot be empty!");
    } else {
        $stmt = mysqli_prepare($conn, "SELECT tbl_cred.user_id, tbl_cred.email, tbl_cred.password, tbl_usertype.user_type AS userType
            FROM tbl_cred
            INNER JOIN tbl_usertype ON tbl_cred.user_id = tbl_usertype.user_id
            WHERE tbl_cred.email = ? AND tbl_usertype.user_type IN ('lawyer', 'client')
            UNION
            SELECT tbl_useradmin.adminID, tbl_useradmin.userName as email, tbl_useradmin.passWord AS password, 'admin' AS userType
            FROM tbl_useradmin
            INNER JOIN tbl_cred ON tbl_useradmin.adminID = tbl_cred.user_id
            WHERE tbl_useradmin.userName = ?");

        mysqli_stmt_bind_param($stmt, "ss", $email, $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
        
            if(password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['userType'] = $row['userType'];

                if($row['userType'] === 'lawyer') {
                    header("Location: lawyerDashboard.php?message=Login Successful");
                } elseif($row['userType'] === 'client') {
                    header("Location: userHomePage.php?message=Login Successful");
                } elseif($row['userType'] === 'admin') {
                    header("Location: Dashboard.php?message=Login Successful");
                }
            } else {
                header("Location: homepage.php?error=Incorrect email or password");
            }
        } else {
            header("Location: homepage.php?error=Incorrect email or password");
        }    
    }  
}
?>
