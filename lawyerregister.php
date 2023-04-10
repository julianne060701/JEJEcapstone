<?php 
include "dbconn.php";

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phonenumber'];
    $password = $_POST['password_1'];
   

    $sql = "INSERT INTO tbl_userlawyer (firstName, lastName, userName, email, phone, password) VALUES
    ('$firstname', '$lastname', '$username', '$email', '$phone', '$password')";

    // upload imaage
    //   if (isset($_FILES['validid'])) {
    //     $fileName = $_FILES['validid']['name'];
    //     $fileType = $_FILES['validid']['type'];
    //     $fileSize = $_FILES['validid']['size'];
    //     $fileTemp = $_FILES['validid']['tmpName'];

    //     if (($fileType == 'image/png' || $fileType == 'image/jpeg') && $fileSize > 0) {
    //         //create unique name
    //         $unique_file_name = time() . '_' . $fileName;
    //         //set path
    //         $filePath = 'images/' . $unique_file_name;
    //         //move uploaded file to new location
    //         move_uploaded_file($fileTemp, $filePath);
    //         //insert to database
    //         $sql = "INSERT INTO tbl_userlawyer (validID) VALUES ('$filePath')";

    //     }
    // }
  

    $result = mysqli_query($conn, $sql);

    echo "Created Successfully!"
?>