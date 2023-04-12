<?php 
include "dbconn.php";

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phonenumber'];
    $password = $_POST['password_1'];
    $usertype = $_POST['user_type'];

    mysqli_autocommit($conn,false);

    $sql1 = "INSERT INTO tbl_userinfo (firstName, lastName, email, phoneNum) VALUES ('$firstname','$lastname','$email', '$phone')";
    $result1 = mysqli_query($conn, $sql1);

    $sql2 = "INSERT INTO tbl_usercredentials (userName, passWord) VALUES ('$username', '$password')";
    $result2 = mysqli_query($conn, $sql2);

    $sql3 = "INSERT INTO tbl_usertype (user_type) VALUES ('$usertype')";
    $result3 = mysqli_query($conn, $sql3);

    if ($result1 && $result2 && $result3) {
        mysqli_commit($conn);
        echo "Registered Successfully";
    } else {
        mysqli_rollback($conn);
        echo "Failed";
    }

    mysqli_close($conn);
?>