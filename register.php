<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="userregister.php">
<div class="input-group">
		<label>FirstName</label>
		<input type="text" name="firstname" value="" required>
	</div>
    <div class="input-group">
		<label>LastName</label>
		<input type="text" name="lastname" value="" required>
	</div>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="" required>
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="" required>
	</div>
    <div class="input-group">
		<label>Phone Number</label>
		<input type="text" name="phonenumber" value="" required>
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1" required>
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2" required>
	</div>
	<div class="input-group">
    <label>Account type</label>
    <select id="user_type" name="user_type">
        <option value="client">Client</option>
        <option value="lawyer">Lawyer</option>
    </select>
</div>


<script>
    document.getElementById('user_type').addEventListener('change', function() {
        var userType = this.value;
        if (userType === 'lawyer') {
            window.location.href = 'lawyersignup.php';
        }
    });
</script>

    <div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>

	<p>
		Already a member? <a href="login.php">Log in</a>
	</p>
</form>
</body>
</html>
