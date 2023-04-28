<?php 
include "dbconn.php";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['username'];
$address = $_POST['email'];
$phone = $_POST['phonenumber'];
$password = $_POST['password_1'];

// Insert user information in tbl_userinfo table
$sql = "INSERT INTO tbl_userinfo (firstName, lastName, phoneNum, address) VALUES ('$firstname','$lastname','$phone', '$address')";

if ($conn->query($sql) === TRUE) {
    $user_id = $conn->insert_id;

    // Insert user credentials in tbl_cred table
    $sql = "INSERT INTO tbl_cred (user_id, email, password) VALUES ('$user_id', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        // Insert user type in tbl_usertype table
        $sql = "INSERT INTO tbl_usertype (user_id, user_type) VALUES ('$user_id', 'client')";
        if ($conn->query($sql) === TRUE) {
            header("Location: homepage.php?msg=Register Successfully");
            exit;
        } else {
            echo "Error inserting user type: " . $conn->error;
        }
    } else {
        echo "Error inserting user credentials: " . $conn->error;
    }
} else {
    echo "Error inserting user information: " . $conn->error;
}
?>
