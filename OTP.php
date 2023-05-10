<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="otp.css">
</head>
<body>
<?php
    include 'dbconn.php';

    if(isset($_POST['validate'])){
      $otp = $_POST['otp'];
      
      $sql = "UPDATE tbl_cred SET email_verified_at = NOW() WHERE email = '$email' AND otp = '$otp'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_affected_rows($conn) == 0) {
        die("OTP Verification Failed");
      }
      header("homepage.php?msg= You can login now!");
      exit();
    }
?>
<form class="form" name="OTP" method="POST">
  <span class="close">X</span>

  <div class="info">
  <span class="title">OTP Verification</span>
  <p class="description">Please enter the code we have sent you. </p>
   </div>
    <div class="inputs">
    <input name="otp" placeholder="" type="tel" maxlength="1">
    <input name="otp" placeholder="" type="tel" maxlength="1">
    <input name="otp" placeholder="" type="tel" maxlength="1">
    <input name="otp" placeholder="" type="tel" maxlength="1">
    <input name="otp" placeholder="" type="tel" maxlength="1">
    <input name="otp" placeholder="" type="tel" maxlength="1">
  </div>
    <button type="submit" name="validate" class="validate">Verify</button>
    <p class="resend">You didn't receive the code? <a class="resend-action" href="#">Resend</a></p>
</form>

</body>
</html>


