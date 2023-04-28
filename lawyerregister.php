<?php 
include "dbconn.php";

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$contact = $_POST['contactnum'];
$email = $_POST['email'];
$password = $_POST['password'];
$id = $_POST['id'];
$permit = $_POST['permit'];
$address = $_POST['address'];

$sql = "INSERT INTO tbl_userinfo (firstName, middleName, lastName, phoneNum, address) VALUES ('$firstname', '$middlename', '$lastname', '$contact', '$address')";

if ($conn->query($sql) === TRUE){
    $user_id = $conn->insert_id;

    $sql = "INSERT INTO tbl_cred (user_id, email, password) VALUES ('$user_id', '$email', '$password')";
    if($conn->query($sql) === TRUE) {
        $sql = "INSERT INTO tbl_usertype (user_id, user_type) VALUES ('$user_id', 'lawyer')";
        if ($conn->query($sql) === TRUE) {
            header("Location: homepage.php?msg=Register successfully");
            exit;
        }
    }
}

    
  

    $result = mysqli_query($conn, $sql);

    echo "Created Successfully!"
?>