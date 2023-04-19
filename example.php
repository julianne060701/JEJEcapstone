<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Law Office Form</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.5;
			background-color: #f2f2f2;
		}

		form {
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.5);
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			z-index: 1;
			display: none;
		}

		form label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}

		form input[type="text"], form input[type="email"], form input[type="tel"], form input[type="file"] {
			display: block;
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
		}

		form button[type="submit"], form button[type="button"] {
			display: block;
			background-color: #4CAF50;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		form button[type="button"] {
			background-color: #f44336;
			margin-right: 10px;
		}
	</style>
</head>
<body>
	<button id="addLawOffice">Add Law Office</button>

	<form id="lawOfficeForm">
		<label for="officeName">Office Name</label>
		<input type="text" id="officeName" name="officeName" required>

		<label for="address">Address</label>
		<input type="text" id="address" name="address" required>

		<label for="email">Email</label>
		<input type="email" id="email" name="email" required>

		<label for="lawyerName">Lawyer Name</label>
		<input type="text" id="lawyerName" name="lawyerName" required>

		<label for="phoneNumber">Phone Number</label>
		<input type="tel" id="phoneNumber" name="phoneNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

		<label for="image">Image</label>
		<input type="file" id="image" name="image" accept="image/*" required>

		<button type="submit">Submit</button>
		<button type="button" id="cancel">Cancel</button>
	</form>

	<script>
		const addLawOfficeBtn = document.getElementById("addLawOffice");
		const lawOfficeForm = document.getElementById("lawOfficeForm");
		const cancelBtn = document.getElementById("cancel");

		addLawOfficeBtn.addEventListener("click", function() {
			lawOfficeForm.style.display = "block";
		});

		cancelBtn.addEventListener("click", function() {
			lawOfficeForm.style.display = "none";
		});
	</script>
</body>
</html>
