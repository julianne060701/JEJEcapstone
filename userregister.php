<?php
include "dbconn.php";

if (isset($_POST['firstname']) && isset($_POST['middlename']) && isset($_POST['lastname']) && isset($_POST['phonenumber'])
&& isset($_POST['email']) && isset($_POST['password_1']) && isset($_POST['cfpassword'])) {

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $firstname = validate($_POST['firstname']);
        $middlename = validate($_POST['middlename']);
        $lastname = validate($_POST['lastname']);
        $phonenumber = validate($_POST['phonenumber']);
        $email = validate($_POST['email']);
        $password = validate($_POST['password_1']);
        $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
        $cfpassword = validate($_POST['cfpassword']);
        $regex = '/^[a-zA-Z ]*$/';

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
      elseif (empty($phonenumber)) {
         header("Location: ClientRegister.php?error= Phone Number cannot be empty!");
         exit();
      }
      elseif (!preg_match('/^\d{1,11}/', $phonenumber)) {
         header("Location: ClientRegister.php?error= Invalid Phone Number");
         exit();
      }
      elseif (empty($email)) {
         header("Location: ClientRegister.php?error= Email cannot be empty!");
         exit();
      }   
      elseif (empty($password)) {
         header("Location: ClientRegister.php?error= Password cannot be empty!");
         exit();
      }
      elseif ($cfpassword != $password) {
         header("Location: ClientRegister.php?error= Password and Confirm Password should be the same");
         exit();
      }else {
         
            // Insert user information in tbl_userinfo table
            $sql = "INSERT INTO tbl_userinfo (firstName, middlename, lastName, phoneNum, address) VALUES ('$firstname','$middlename' ,'$lastname','$phonenumber', '$address')";

            if ($conn->query($sql) === TRUE) {
                $user_id = $conn->insert_id;

                // Insert user credentials in tbl_cred table
                $sql = "INSERT INTO tbl_cred (user_id, email, password, otp, email_verified) VALUES ('$user_id', '$email', '$encrypted_password', '$otp', NULL)";
                if ($conn->query($sql) === TRUE) {
                    // Insert user type in tbl_usertype table
                    $sql = "INSERT INTO tbl_usertype (user_id, user_type) VALUES ('$user_id', 'client')";
                    if ($conn->query($sql) === TRUE) {
                        header("Location: OTP.php?msg=OTP Verification");
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
      }
      }
?> 