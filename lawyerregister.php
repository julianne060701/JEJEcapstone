<?php 
include "dbconn.php";

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phonenumber'];
    $password = $_POST['password_1'];
    $usertype = $_POST['user_type'];
   

    
  

    $result = mysqli_query($conn, $sql);

    echo "Created Successfully!"
?>