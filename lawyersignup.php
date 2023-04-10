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
<form method="post" action="register.php">
<div class="input-group">
		<label>FirstName</label>
		<input type="text" name="firstname" value="">
	</div>
    <div class="input-group">
		<label>LastName</label>
		<input type="text" name="lastname" value="">
	</div>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="">
	</div>
    <div class="input-group">
		<label>Phone Number</label>
		<input type="text" name="phonenumber" value="">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
    <label>Account type</label>
    <select id="user_type" name="user_type">
        <option value="client">Client</option>
        <option value="lawyer">Lawyer</option>
    </select>
</div>
<div class="input-group">
		<label>Valid ID</label>
		<input type="file" name="valid_id">
	</div>
	<div class="input-group">
		<label>Business Permit</label>
		<input type="file" name="business_permit">
	</div>


<script>
    document.getElementById('user_type').addEventListener('change', function() {
        var userType = this.value;
        if (userType === 'client') {
            window.location.href = 'register.php';
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
