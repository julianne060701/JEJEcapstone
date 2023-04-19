<?php 
include "dbconn.php";

$officeid = $_GET['office_id'];
$status = $_GET['status'];
$updatestatus = "UPDATE tbl_offices SET status = $status WHERE office_id = $officeid";
mysqli_query($conn, $updatestatus);
header("Location: lawyerOffice.php");
?>