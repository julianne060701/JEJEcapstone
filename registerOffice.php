<?php 
      include "dbconn.php";

      $firmName = $_POST['firmName'];
      $address = $_POST['address'];
      $contactNumber = $_POST['contactNumber'];
      $email = $_POST['email'];

      $sql = "INSERT INTO tbl_officeinfo (office_name, office_email, office_status) VALUES ('$firmName','$email', '0')";

      if($conn->query($sql) === TRUE) {
        $office_id = $conn->insert_id;

        
        $sql = "INSERT INTO tbl_officecred(office_id, office_address, office_contact) VALUES ('$office_id', '$address', '$contactNumber')";
        header("Location: LawyerOfficeFinal.php?=Register Successfully!");
        $result = mysqli_query($conn, $sql);
      }

      ?>