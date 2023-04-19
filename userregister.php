<?php 
include "dbconn.php";

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];


    $sql = "INSERT INTO tbl_userinfo (firstName, lastName, phoneNum, address) VALUES ('$firstname','$lastname','$phone', '$address')";
    $result = mysqli_query($conn, $sql);

   if ($conn->query($sql) === TRUE) {
    $user_id = $conn->insert_id;

    $sql = "INSERT INTO tbl_cred (user_id, email, password) VALUES ('$user_id', '$email', '$password')";
    header("Location:homepage.php?=Register Successfully");
    $result = mysqli_query($conn, $sql);
}
else {
    echo "Error inserting data: " . $conn->error;
}
?>