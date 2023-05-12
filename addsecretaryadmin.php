<?php 
    require_once 'dbconn.php';

    if(isset($_POST['firstname']) && isset($_POST['middlename']) && isset($_POST['lastname']) && isset($_POST['address'])
    && isset($_POST['contactNumber']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2'])) {

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $firstname = validate($_POST['firstname']);
        $middlename = validate($_POST['middlename']);
        $lastname = validate($_POST['lastname']);
        $address = validate($_POST['address']);
        $contactNumber = validate($_POST['contactNumber']);
        $email = validate($_POST['email']);
        $password = validate($_POST['password']);
        $password2 = validate($_POST['password2']);
        $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
        $regex = '/^[a-zA-Z ]*$/';

        if(empty($firstname) || empty($lastname)) {
            header("Location: lawyerSecretary.php?error= Name cannot be empty");
            exit();
        } elseif (!preg_match($regex, $firstname) || !preg_match($regex, $middlename) || !preg_match($regex, $lastname)){
            header("Location: lawyerSecretary.php?error= Name must be letter only");
            exit();
        } elseif(empty($address)) {
            header("Location: lawyerSecretary.php?error= Address cannot be empty");
            exit();
        }
        elseif(empty($contactNumber)){
            header("Location: lawyerSecretary.php?error= Contact number cannot be empty");
            exit();
        }
        elseif(!preg_match('/^\d{1,11}/', $contactNumber)){
            header("Location: lawyerSecretary.php?error= Invalid phone number");
            exit();
        }
        elseif(empty($email)){
            header("Location: lawyerSecretary.php?error= Email cannot be empty");
            exit();
        }
        elseif(!preg_match('/^[^\s@]+@[^\s@]+\.[^\s@]+$/', $email)){
            header("Location: lawyerSecretary.php?error= Email address must contain @");
            exit();
        }
        elseif(empty($password)){
            header("Location: lawyerSecretary.php?error= Password cannot be empty");
            exit();
        }
        elseif(empty($password2)){
            header("Location: lawyerSecretary.php?error= Confirm password cannot be empty");
            exit();
        }
        elseif($password != $password2){
            header("Location: lawyerSecretary.php?error= Password and confirm password is not match");
            exit();
        } else {
            
            $sql = "INSERT INTO tbl_userinfo (firstname, middlename, lastname) VALUES ('$firstname', '$middlename', '$lastname')";

            if($conn->query($sql) === TRUE) {
                $user_id = $conn->insert_id;

                $sql = "INSERT INTO tbl_cred(user_id, email, password) VALUES ('$user_id', '$email', '$encrypted_password')";
                
                if($conn->query($sql) === TRUE) {
                    $sql = "INSERT INTO tbl_usertype (user_id, user_type) VALUES ('$user_id', 'secretary')";
                    
                    if($conn->query($sql) === TRUE) {
                        $sql = "INSERT INTO tbl_contactinfo (user_id, address, phoneNum) VALUES ('$user_id', '$address', '$contactNumber')";

                        if($conn->query($sql) === TRUE) {
                            header("Location: secretarylist.php?msg= Lawyer secretary registered successfully");
                            exit();
                        }
                    }
                }
            }
        }
    }
    ?>