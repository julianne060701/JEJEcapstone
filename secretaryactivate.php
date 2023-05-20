<?php 
include "dbconn.php";

$userinfoid = $_GET['userinfo_id'];
$status = $_GET['status'];
$updatestatus = "UPDATE tbl_userinfo SET user_status = '$status' WHERE userinfo_id = $userinfoid";
mysqli_query($conn, $updatestatus);
header("Location: secretarylist.php");
?>