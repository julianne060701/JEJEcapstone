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
<form method="post" action="lawyerregister.php" novalidate onsubmit="return validateFirstname() && validateLastname()">
<div class="input-group">
		<label>First Name</label>
		<input type="text" name="firstname" id="firstname" value="" required onblur="validateFirstname()">
	</div>
    <div class="input-group">
		<label>Last Name</label>
		<input type="text" name="lastname" id="lastname" value="" required onblur="validateLastname()">
	</div>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" id="username" value="" required>
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" id="email" value="" required>
	</div>
    <div class="input-group">
		<label>Phone Number</label>
		<input type="text" name="phonenumber" id="phonenumber" value="" required>
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1" id="password_1" value="" required>
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2" id="password_2" value="" required>
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
		<input type="file" name="valid_id" >
	</div>
	<div class="input-group">
		<label>Business Permit</label>
		<input type="file" name="business_permit" >
	</div>

<!-- java script -->
<script>
	function validateFirstname() {
		var firstnameInput =document.getElementById("firstname");
		var firstnameValue =firstnameInput.value;
		var letters = /^[a-zA-Z]+$/;;

		if (firstnameValue =="") {
			alert("Error: First name field must be filled.");
			return false;
		}else if (!firstnameValue.match(letters)) {
			alert("Error: First name must be alphabetical.");
			firstnameInput.value ="";
			return false;
		}
		else {
			return true;
		}
	}
</script>

<script>
	function validateLastname() {
		var lastnameInput = document.getElementById("lastname");
		var lastnameValue =lastnameInput.value;
		var letters = /^[a-zA-Z]+$/;

		if (lastnameValue == "") {
			alert("Error: Last name field should not be empty.");
			return false;
		} else if (!lastnameValue.match(letters)) {
			alert("Error: Last name must be alphabetical")
			return false;
		} else {
			return true;
		}
	}
</script>

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
