<!-- ClientRegister.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ClientRegister.css">
</head>

<body>
    <style>body{
        background: url("assets/images/slider/main.jpg") no-repeat center center fixed;
        background-size: cover;
    }
    </style>
    <form class="form" action="userregister.php" method="POST">

        <p class="title">Register </p>
        <?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?> </p>
		<?php } ?>
            <div class="flex">
            <label>
                <input placeholder="" type="text" name="firstname" class="input">
                <span>First name</span>
            </label>
    
            <label>
                <input  placeholder="" type="text" name="middlename" class="input">
                <span>Middle Name</span>
            </label>
        </div> 
        
        <div class="flex">
            <label>
                <input placeholder="" type="text" name="lastname" class="input">
                <span>Last name</span>
            </label>
    
            <label>
                <input placeholder="" type="number" name="phonenumber" maxlength="11" class="input-number input">
                <span>Contact Number</span>
            </label>
        </div> 
                
        <div class="flex">       
        <label>
            <input placeholder="" type="email" name="email" class="input" style="width: 410px">
            <span>Email </span>
        </label> 
        </div>
            
        <label>
            <input placeholder="" type="password" name="password_1" class="input" style="width: 410px;">
            <span>Password</span>
        </label>
        <label>
            <input placeholder="" type="password" name="cfpassword" class="input" style="width: 410px;">
            <span>Confirm password</span>
        </label> 
                          
        </div>     
        <button class="submit" type="submit" name="register">Register</button>
        <p class="signin">Already have an acount ? <a href="homepage.php">Signin</a> </p>
    </form>
</body>
</html>