<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="register.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form action="userlogin.php" method="post">
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?> </p>
		<?php } ?>
		<div class="input-group">
			<label>Email Address</label>
			<input type="text" name="emailadd">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Don't have an account? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>
