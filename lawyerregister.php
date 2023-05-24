<?php 
include "dbconn.php";

    if(!isset($_FILES['id']['tmp_name'])) {

        echo("");
    }

    else {
        $file = $_FILES['id']['tmp_name'];
        $image = $_FILES['id']['name'];
        $image_name = addslashes($_FILES['id']['name']);
        $size = $_FILES['id']['size'];
        $error = $_FILES['id']['error'];

    }
    if($size > 10000000) {
        die("Files size is too big");
    } 
    else {

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }

        move_uploaded_file($_FILES["id"]["tmp_name"], "images/" . $_FILES["id"]["name"]);
        $image_id = $_FILES["id"]["name"];
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $contactnum = $_POST['contactnum'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $Barangay = $_POST['Barangay'];
        $City = $_POST['City'];
        $zipcode = $_POST['zipcode'];
        $password = $_POST['password'];
        $cfpassword = $_POST['cfpassword'];
        $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
        $specialty = $_POST['Specialty'];
        $others = $_POST['others'];
        $regex = '/^[a-zA-Z ]*$/';
        $check_email = "SELECT email FROM tbl_cred WHERE email = '$email' LIMIT 1";
        $check_email_run = mysqli_query($conn, $check_email);

        //validation

        if (empty($firstname)) {
            header("Location: LawRegister.php?error= First Name cannot be empty!");
            exit();
         } 
         elseif(!preg_match($regex, $firstname) || !preg_match($regex, $middlename) || !preg_match($regex, $lastname)){
            header("Location: LawRegister.php?error= Name must be letter only!");
            exit();
         }
         elseif (empty($middlename)) {
            header("Location: LawRegister.php?error= Middle Name cannot be empty!");
            exit();
         }
         elseif (empty($lastname)) {
            header("Location: LawRegister.php?error= Last Name cannot be empty!");
            exit();
         }
         elseif (empty($contactnum)) {
            header("Location: LawRegister.php?error= Contact number cannot be empty!");
            exit();
         }
         elseif (!preg_match('/^\d{1,11}$/', $contactnum)) {
            header("Location: LawRegister.php?error=Invalid Phone Number");
            exit();
        }
         elseif (empty($email)) {
            header("Location: LawRegister.php?error= Email cannot be empty!");
            exit();
         }
         elseif (!preg_match('/^[^\s@]+@[^\s@]+\.[^\s@]+$/', $email)){
            header("Location: LawRegister.php?error=Email address must be valid");
            exit();
        }        
         elseif(mysqli_num_rows($check_email_run) > 0){
            header("Location: LawRegister.php?error= Email already exist");
            exit();
         }
         elseif (empty($address)) {
            header("Location: LawRegister.php?error= Street cannot be empty!");
            exit();
         }
         elseif (empty($Barangay)) {
            header("Location: LawRegister.php?error= Barangay  cannot be empty!");
            exit();
         }
         elseif (empty($City)) {
            header("Location: LawRegister.php?error= City  cannot be empty!");
            exit();
         }
         elseif (empty($zipcode)) {
            header("Location: LawRegister.php?error= Zip code  cannot be empty!");
            exit();
         }
         elseif (empty($password)) {
            header("Location: LawRegister.php?error= Password cannot be empty!");
            exit();
         }
         elseif ($cfpassword != $password) {
            header("Location: LawRegister.php?error=Password and confirm password do not match");
            exit();
        }        
         elseif (empty($specialty)) {
            header("Location: LawRegister.php?error= Specialty cannot be empty!");
            exit();

            if($_POST['specialty'] == "Others") {
                header("Location: LawRegister.php?error= Others cannot be empty!");
            exit();
            }
         }
         elseif (empty($image_id)) {
            header("Location: LawRegister.php?error= ID cannot be empty!");
            exit();
         }

         else {

        //database
            $sql = "INSERT INTO tbl_userinfo (firstName, middleName, lastName, gender, user_status) VALUES ('$firstname', '$middlename', '$lastname', '$gender', '1')";
            
            if ($conn->query($sql) === TRUE) {
            $user_id = $conn->insert_id;
            $sql = "INSERT INTO tbl_cred (user_id, email, password) VALUES ('$user_id', '$email', '$encrypted_password')";
                
            if($conn->query($sql) === TRUE) {
                $sql = "INSERT INTO tbl_usertype (user_id, user_type) VALUES ('$user_id', 'lawyer')";

                if($conn->query($sql) === TRUE) {
                    $sql = "INSERT INTO tbl_contactinfo (user_id, address, barangay, city, zipcode, phoneNum) VALUES ('$user_id', '$address', '$Barangay', '$City', '$zipcode', '$contactnum')";

                        if($conn->query($sql) === TRUE) {
                            if(empty($_POST['speciaty'] == "Others")) 
                            {
                                $sql = "INSERT INTO tbl_lawyerinfo (user_id, specialty) VALUES ('$user_id', '$others')";
                            } 
                            else 
                            {
                                $sql = "INSERT INTO tbl_lawyerinfo (user_id, specialty) VALUES ('$user_id', '$specialty')";
                            }
                    
                            if($conn->query($sql) === TRUE) {
                                $sql = "INSERT INTO tbl_images (user_id, id, profile) VALUES ('$user_id', '$image_id', '')";
                                
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
    }
?>