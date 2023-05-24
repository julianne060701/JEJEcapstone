<?php 
      include "dbconn.php";

      if(!isset($_FILES['permit']['tmp_name'])){
        echo("");
      }

      else {
        $file = $_FILES['permit']['tmp_name'];
        $image = $_FILES['permit']['name'];
        $image_name = addslashes($_FILES['permit']['name']);
        $size = $_FILES['permit']['size'];
        $error = $_FILES['permit']['error'];
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

        move_uploaded_file($_FILES['permit']['tmp_name'], "images/" . $_FILES['permit']['name']);
        $image_id = $_FILES['permit']['name'];
        $firmname = $_POST['firstName'];
        $address = $_POST['address'];
        $contactNumber = $_POST['contactNumber'];
        $email = $_POST['email'];

        $sql = "INSERT INTO tbl_officeinfo (office_name, office_email, office_status) VALUES ('$firmname', '$email', '0')";

        if ($conn->query($sql) === TRUE) {
          $office_id = $conn->insert_id;
          $sql = "INSERT INTO tbl_officecred (office_id, office_address, office_contact) VALUES ('$office_id','$email', '$contactNumber')";

          if($conn->query($sql) === TRUE) {
            $office_id = $conn->insert_id;
            $sql = "INSERT INTO tbl_office_images (office_id, office_permit, office_images) VALUES ('$office_id', '$image_id', '')";

            if($conn->query($sql) === TRUE) {
              header("Location: LawyerOfficeFinal.php:msg?=Law Office Added Successfully");
              exit();
            }
          }
        }
      }

      // $firmName = $_POST['firmName'];
      // $address = $_POST['address'];
      // $contactNumber = $_POST['contactNumber'];
      // $email = $_POST['email'];

      // $sql = "INSERT INTO tbl_officeinfo (office_name, office_email, office_status) VALUES ('$firmName','$email', '0')";

      // if($conn->query($sql) === TRUE) {
      //   $office_id = $conn->insert_id;

        
      //   $sql = "INSERT INTO tbl_officecred(office_id, office_address, office_contact) VALUES ('$office_id', '$address', '$contactNumber')";
      //   header("Location: LawyerOfficeFinal.php?=Register Successfully!");
      //   $result = mysqli_query($conn, $sql);
      // }

      ?>