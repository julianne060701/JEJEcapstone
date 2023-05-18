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
        
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);
        
        $sql = "SELECT tbl_cred.user_id, tbl_cred.email, tbl_cred.password, tbl_usertype.user_id, tbl_usertype.user_type AS userType
        FROM tbl_cred
        INNER JOIN tbl_usertype ON tbl_cred.user_id = tbl_usertype.user_id
        WHERE tbl_cred.email = '$email' AND tbl_cred.password = '$password' AND tbl_usertype.user_type IN ('secretary', 'lawyer', 'admin', 'client')";
        
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
        
            if ($row['userType'] === 'lawyer') {
                header("Location: lawyerDashboard.php?message=Login Successfully");
                exit();
            } elseif ($row['userType'] === 'client') {
                header("Location: userHomePage.php?message=Login Successfully");
                exit();
            } elseif ($row['userType'] === 'admin') {
                header("Location: Dashboard.php?message=Login Successfully");
                exit();
            } elseif ($row['userType'] === 'secretary') {
                header("Location: lawyerappointment.php?message=Login Successfully");
                exit();
            }
        } else {
            header("Location: homepage.php?error=Incorrect email or password!");
            exit();
        }
        
        }   
    } 

?>
