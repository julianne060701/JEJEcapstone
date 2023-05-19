<?php
include 'dbconn.php';

    $message = $_POST['message'];

    $sql = "INSERT INTO tbl_notice (notice) VALUES ('$message')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: noticeboard.php?msg=Notice added successfully");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

?>