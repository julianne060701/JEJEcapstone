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
    
   //  if (empty($firstname)) {
   //      header("Location: LawRegister.php?error= First Name cannot be empty!");
   //      exit();
   //   } 
   //   elseif (empty($middlename)) {
   //      header("Location: LawRegister.php?error= Middle Name cannot be empty!");
   //      exit();
   //   }
   //   elseif (empty($lastname)) {
   //      header("Location: LawRegister.php?error= Last Name cannot be empty!");
   //      exit();
   //   }
   //   elseif (empty($phonenumber)) {
   //      header("Location: LawRegister.php?error= Phone Number cannot be empty!");
   //      exit();
   //   }
   //   elseif (!preg_match('/^\d{1,11}/', $phonenumber)) {
   //      header("Location: LawRegister.php?error= Invalid Phone Number");
   //      exit();
   //   }
   //   elseif (empty($email)) {
   //      header("Location: LawRegister.php?error= Email cannot be empty!");
   //      exit();
   //   }
   //   elseif (!preg_match('/^[^\s@]+@[^\s@]+\.[^\s@]+$/', $email)){
   //      header("Location: LawRegister.php?error= Email address must contain @");
   //      exit();
   //   }
   //   elseif (empty($password)) {
   //      header("Location: LawRegister.php?error= Password cannot be empty!");
   //      exit();
   //   }
   //   elseif ($cfpassword != $password) {
   //      header("Location: LawRegister.php?error= Password and confirm password is not match");
   //      exit();
   //   }
   //   elseif(mysqli_num_rows($check_email_run) > 0){
   //      header("Location: LawRegister.php?error= Email already exist");
   //      exit();
   //   }
   //   else {
        $sql = "INSERT INTO tbl_userinfo (firstName, middleName, lastName, user_type) VALUES ('$firstname', '$middlename', '$lastname', '1')";
        
        if ($conn->query($sql) === TRUE) {
            $user_id = $conn->insert_id;
            $sql = "INSERT INTO tbl_cred (user_id, email, password) VALUES ('$user_id', '$email', '$password')";
            
            if($conn->query($sql) === TRUE) {
                $sql = "INSERT INTO tbl_usertype (user_id, user_type) VALUES ('$user_id', 'lawyer')";

                if($conn->query($sql) === TRUE) {
                    $sql = "INSERT INTO tbl_contactinfo (user_id, address, phoneNum) VALUES ('$user_id', '$address', '$contact')";

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
?>