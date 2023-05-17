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
    $institute = $_POST['institutename'];
    $degree = $_POST['degree'];
    $passingyear = $_POST['passingyear'];
    $specialty = $_POST['specialty'];
    
    
    $sql = "INSERT INTO tbl_userinfo (firstName, middleName, lastName) VALUES ('$firstname', '$middlename', '$lastname')";
    
    if ($conn->query($sql) === TRUE) {
        $user_id = $conn->insert_id;
        $sql = "INSERT INTO tbl_cred (user_id, email, password) VALUES ('$user_id', '$email', '$password')";
        
        if($conn->query($sql) === TRUE) {
            $sql = "INSERT INTO tbl_usertype (user_id, user_type) VALUES ('$user_id', 'lawyer')";

            if($conn->query($sql) === TRUE) {
                $sql = "INSERT INTO tbl_contactinfo (user_id, address, phoneNum) VALUES ('$user_id', '$address', '$contact')";

                if($conn->query($sql) === TRUE) {
                    $sql = "INSERT INTO tbl_status (user_id, office_id, status) VALUES ('$user_id', '', '0')";

                    if($conn->query($sql) === TRUE) {
                        $sql = "INSERT INTO tbl_lawyerinfo (user_id, institute_name, degree, passing_year, specialty) VALUES ('$user_id', '$institute', '$degree', '$passingyear', '$specialty')";

                        if($conn->query($sql) === TRUE) {
                            $sql = "INSERT INTO tbl_images (user_id, name, id, permit) VALUES ('$user_id', '$pname', '$id', '$permit')";

                            if($conn->query($sql) === TRUE) {
                                header("Location: homepage.php?msg=Register Successfully");
                                exit();
                            }
                        }
                    }
                }
            }
        }
    }

?>