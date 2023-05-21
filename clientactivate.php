<?php 
include "dbconn.php";

$userinfo_id = $_GET['userinfo_id'];
$status = $_GET['status'];
$updatestatus = "UPDATE tbl_userinfo SET user_status = '$status' WHERE userinfo_id = $userinfo_id";
mysqli_query($conn, $updatestatus);
header("Location: clientlist.php");
?>