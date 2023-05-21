<?php
include "dbconn.php";

         function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }

        $firstname = ($_POST['firstname']);
        $middlename = ($_POST['middlename']);
        $lastname = ($_POST['lastname']);
        $gender = ($_POST['gender']);
        $address = ($_POST['address']);
        $barangay = ($_POST['Barangay']);
        $city = ($_POST['City']);
        $zipcode = ($_POST['zipcode']);
        $phonenumber = ($_POST['phonenumber']);
        $email = ($_POST['email']);
        $password = ($_POST['password_1']);
        $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
        $cfpassword = ($_POST['cfpassword']);
        $regex = '/^[a-zA-Z ]*$/';
        $name = $firstname . $lastname;
        $check_email = "SELECT email FROM tbl_cred WHERE email = '$email' LIMIT 1";
        $check_email_run = mysqli_query($conn, $check_email);
        //validation
      if (empty($firstname)) {
         header("Location: ClientRegister.php?error= First Name cannot be empty!");
         exit();
      } 
      elseif(!preg_match($regex, $firstname) || !preg_match($regex, $middlename) || !preg_match($regex, $lastname)){
         header("Location: ClientRegister.php?error= Name must be letter only!");
         exit();
      }
      elseif (empty($middlename)) {
         header("Location: ClientRegister.php?error= Middle Name cannot be empty!");
         exit();
      }
      elseif (empty($lastname)) {
         header("Location: ClientRegister.php?error= Last Name cannot be empty!");
         exit();
      }
      elseif (empty($address)) {
         header("Location: ClientRegister.php?error= Street cannot be empty!");
         exit();
      }
      elseif (empty($barangay)) {
         header("Location: ClientRegister.php?error= Barangay cannot be empty!");
         exit();
      }
      elseif (empty($city)) {
         header("Location: ClientRegister.php?error= City cannot be empty!");
         exit();
      }
      elseif (empty($zipcode)) {
         header("Location: ClientRegister.php?error= Zip Code cannot be empty!");
         exit();
      }
      elseif (empty($email)) {
         header("Location: ClientRegister.php?error= Email cannot be empty!");
         exit();
      }
      elseif (!preg_match('/^[^\s@]+@[^\s@]+\.[^\s@]+$/', $email)){
         header("Location: ClientRegister.php?error= Email address must contain @");
         exit();
      }
      elseif(mysqli_num_rows($check_email_run) > 0){
         header("Location: ClientRegister.php?error= Email already exist");
         exit();
      }
      elseif (empty($phonenumber)) {
         header("Location: ClientRegister.php?error= Contact number cannot be empty!");
         exit();
      }
      elseif (!preg_match('/^\d{1,11}/', $phonenumber)) {
         header("Location: ClientRegister.php?error= Invalid Phone Number");
         exit();
      }
      elseif (empty($password)) {
         header("Location: ClientRegister.php?error= Password cannot be empty!");
         exit();
      }
      elseif ($cfpassword != $password) {
         header("Location: ClientRegister.php?error= Password and confirm password is not match");
         exit();
      }
      else {
            //INSERT TO DATABASE
            $sql = "INSERT INTO tbl_userinfo (firstName, middlename, lastName, gender, user_status) VALUES ('$firstname', '$middlename', '$lastname', '$gender', '1')";

            if($conn->query($sql) === TRUE){
               $user_id = $conn->insert_id; //auto insert id

               $sql = "INSERT INTO tbl_cred (user_id, email, password) VALUES ('$user_id', '$email', '$encrypted_password')";
               if($conn->query($sql) === TRUE) {
                  $sql = "INSERT INTO tbl_usertype (user_id, user_type) VALUES ('$user_id', 'client')";
                  
                  if($conn->query($sql) === TRUE) {
                     $sql = "INSERT INTO tbl_contactinfo (user_id, address, barangay, city, zipcode, phoneNum) VALUES ('$user_id', '$address', '$barangay', '$city', '$zipcode', '$phonenumber')";
                     
                           if($conn->query($sql) === TRUE) {
                              header("Location: homepage.php?msg=Register+Successfull");
                              exit();  
                           }
                        }
                     else {
                        echo ('Error  inserting contact');
                     }
                  }
               else {
               echo ('Error inserting credentials');
            }
         }
         else {
         echo ('Error inserting userinfo');
      } 
   }
?> 