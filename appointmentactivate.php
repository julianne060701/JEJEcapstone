<?php 
include "dbconn.php";

$appointmentid = $_GET['appointment_id'];
$status = $_GET['status'];
$updatestatus = "UPDATE tbl_appointment SET appointment_status = '$status' WHERE appointment_id = $appointmentid";
mysqli_query($conn, $updatestatus);
header("Location: appointmentlist.php");
?>