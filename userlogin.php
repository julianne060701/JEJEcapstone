<?php
session_start();
include "dbconn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        header("Location: homepage.php?error=Email cannot be empty!");
        exit();
    } elseif (empty($password)) {
        header("Location: homepage.php?error=Password cannot be empty!");
        exit();
    } else {
        $email = mysqli_real_escape_string($conn, $email);

$sql = "SELECT tbl_cred.user_id, tbl_cred.email, tbl_cred.password, tbl_usertype.user_id, tbl_usertype.user_type AS userType, tbl_userinfo.user_status
        FROM tbl_cred
        INNER JOIN tbl_usertype ON tbl_cred.user_id = tbl_usertype.user_id
        INNER JOIN tbl_userinfo ON tbl_cred.user_id = tbl_userinfo.userinfo_id
        WHERE tbl_cred.email = '$email' AND tbl_usertype.user_type IN ('secretary', 'lawyer', 'admin', 'client')";

$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    $hashedPassword = $row['password'];

    if (password_verify($password, $hashedPassword)) {
        if ($row['user_status'] == 1) { // Check user_status
            if ($row['userType'] === 'lawyer') {
                header("Location: lawyerDashboard.php?message=Login Successfully");
                exit();
            } elseif ($row['userType'] === 'client') {
                header("Location: clientHomePage.php?message=Login Successfully");
                exit();
            } elseif ($row['userType'] === 'admin') {
                header("Location: Dashboard.php?message=Login Successfully");
                exit();
            } elseif ($row['userType'] === 'secretary') {
                header("Location: lawyerappointment.php?message=Login Successfully");
                exit();
            }
        } else {
            header("Location: homepage.php?error=Your account is disabled. Please contact the admin");
            exit();
        }
    } else {
        header("Location: homepage.php?error=Incorrect email or password!");
        exit();
    }
} else {
    header("Location: homepage.php?error=Incorrect email or password!");
    exit();
}

    }
} else {
    header("Location: homepage.php");
    exit();
}
?>
