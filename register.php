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
<form action="userregister.php" method="post" novalidate onsubmit="return validateFirstname() && validateLastname()
		&& validateUsername() && validateEmail() && validatePhone() && validatePassword() && validateConfirmpassword()">
<div class="input-group">
		<label>First Name</label>
		<input type="text" name="firstname" id="firstname" required onblur="validateFirstname()">
	</div>
    <div class="input-group">
		<label>Last Name</label>
		<input type="text" name="lastname" id="lastname" value="" required onblur="validateLastname()">
	</div>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" id="username" value="" required onblur="validateUsername()">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" id="email" value="" required onblur="validateEmail()">
	</div>
    <div class="input-group">
		<label>Phone Number</label>
		<input type="text" name="phonenumber" id="phonenumber1" value=""  required onblur="validatePhone()">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1" id="password_1" required onblur="validatePassword()">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2" id="cfpassword" required onblur="validateConfirmpassword()">
	</div>
	<div class="input-group">
    <label>Account type</label>
    <select id="user_type" name="user_type">
        <option value="client">Client</option>
        <option value="lawyer">Lawyer</option>
    </select>
</div>

<!-- valid name -->
<script>
	function validateFirstname() {
		var nameInput = document.getElementById("firstname");
		var nameValue =nameInput.value;
		var letters = /^[a-zA-Z]+$/;

		if (nameValue == "") {
			alert("Error: First name field must be filled.");
			return false;
		}
		else if (!nameValue.match(letters)) {
			alert("Error: First name must be alphabetical.");
			nameInput.value ="";
			return false;
		}
		else {
			return true;
		}
	}
</script>

<script>
	function validateLastname() {
		var nameInput = document.getElementById("lastname");
		var nameValue =nameInput.value;
		var letters = /^[a-zA-Z]+$/;

		if (nameValue == "") {
			alert("Error: Last name field must be filled.");
			return false;
		}
		else if (!nameValue.match(letters)) {
			alert("Error: Last name must be alphabetical.");
			nameInput.value ="";
			return false;
		}
		else {
			return true;
		}
	}
</script>

<!-- validate username -->
<script>
	function validateUsername() {
		var usernameInput = document.getElementById("username");
		var usernameValue =usernameInput.value;

		if (usernameValue == "") {
			alert("Error: Username field cannot be empty.");
			return false;
		}
			else {
				return true;
			}
		}	
</script>

<script>
	function validateEmail() {
		var emailInput =document.getElementById("email");
		var emailValue =emailInput.value;
		var format = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/;

		if (emailValue == "") {
			alert("Error: Email field must be filled");
			return false;
		}
		else if (!emailValue.match(format)) {
			alert("Error: Email must contain '@'");
			emailInput.value = "";
			return false;
		}else {
			return true;
		}
	}
</script>

<!-- validate phone -->
<script>
	function validatePhone() {
		var phoneInput = document.getElementById("phonenumber1");
		var phoneValue = phoneInput.value;

		if(phoneValue == "") {
			alert("Error: Phone number field must be filled.");
			return false;
		}
		else if(isNaN(phoneValue)) {
			alert("Error: Incorrect Phone Number.");
			phoneInput.value = "";
			return false;
		} else if (phoneValue.length != 11) {
			alert("Error: Phone number should be 11 digits.");
			phoneInput.value = "";
			return false;
		}else {
			return true;
		}
	}
</script>

<!-- validate password -->
<script>
	function validatePassword() {
		var password_1Input =document.getElementById("password_1");
		var password_1Value =password_1Input.value;

		if (password_1Value == "") {
			alert("Error: Password field cannot be empty.");
			return false;
		}else {
			return true;
		}
	}
</script>

<!-- validate confirm password -->
<script>
	function validateConfirmpassword() {
		var password_2Input = document.getElementById("cfpassword");
		var password_2Value = password_2Input.value;
		var password_1Input = document.getElementById("password_1");
		var password_1Value = password_1Input.value;

		if (password_2Value == "") {
			alert("Error: Confirm password field cannot be empty.");
			return false;
		}
		else if (password_2Value == password_1Value) {
			return true;
		}
		else {
			alert("Error: Passwords do not match.");
			password_2Input.value = "";
			return false;
		}
	}
</script>


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
