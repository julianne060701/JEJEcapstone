<?php 
include "dbconn.php";

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phonenumber'];
    $password = $_POST['password_1'];

    $sql = "INSERT INTO tbl_userclient (firstName, lastName, userName, email, phone, passWord) VALUES
    ('$firstname', '$lastname', '$username', '$email', '$phone', '$password')";

    $result = mysqli_query($conn, $sql);
    echo "Created Successfully!"
    
?>