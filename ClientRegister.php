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
                <span>First name *</span>
            </label>
    
            <label>
                <input  placeholder="" type="text" name="middlename" class="input">
                <span>Middle Name *</span>
            </label>
        </div> 
        
        <div class="flex">
            <label>
                <input placeholder="" type="text" name="lastname" class="input">
                <span>Last name *</span>
            </label>

            <label>
                    <select name="gender" class="input" style="width: 215px">
                        <option value="">Gender *</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Prefer not to say</option>
                    </select>
            </label>
        </div> 
        <div class="flex"> 
            <label>
                <input placeholder="" type="text" name="address" class="input">
                <span> Street *</span>
            </label>

            <label>
                <input placeholder="" type="text" name="Barangay" class="input">
                <span> Barangay *</span>
            </label>
        </div>

        <div class="flex"> 
            <label>
                <input placeholder="" type="text" name="City" class="input">
                <span> City *</span>
            </label>

            <label>
                <input placeholder="" type="text" name="zip code" class="input">
                <span> Zip Code *</span>
            </label>
        </div>
                
        <div class="flex">       
        <label>
            <input placeholder="" type="text" name="email" class="input" >
            <span>Email *</span>
        </label> 
        
        <label>
                <input placeholder="" type="number" name="phonenumber" maxlength="11" class="input-number input">
                <span>Contact Number *</span>
            </label>
        </div>

        <div class="flex"> 
        <label>
            <input placeholder="" type="password" name="password_1" class="input" >
            <span>Password *</span>
        </label>
        <label>
            <input placeholder="" type="password" name="cfpassword" class="input" >
            <span>Confirm password *</span>
        </label> 
                          
        </div>     
        <button class="submit" type="submit" name="register">Register</button>
        <p class="signin">Already have an acount ? <a href="homepage.php">Signin</a> </p>
    </form>
</body>
</html>