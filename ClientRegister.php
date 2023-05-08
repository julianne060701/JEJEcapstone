<!-- ClientRegister.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="LawRegister.css">
</head>

<body>
    <form class="form" action="lawyerregister.php" method="POST">
        
        
        <p class="title">Register </p>
            <div class="flex">
            <label>
                <input required="" placeholder="" type="text" name="firstname" class="input">
                <span>First name</span>
            </label>
    
            <label>
                <input required="" placeholder="" type="text" name="middlename" class="input">
                <span>Middle Name</span>
            </label>
        </div> 
        
        <div class="flex">
            <label>
                <input required="" placeholder="" type="text" name="lastname" class="input">
                <span>Last name</span>
            </label>
    
            <label>
                <input required="" placeholder="" type="number" name="contactnum" class="input-number input">
                <span>Contact Number</span>
            </label>
        </div> 
                
        <label>
            <input required="" placeholder="" type="email" name="email" class="input"  style="width: 400px;">
            <span>Email</span>
        </label> 
            
        <label>
            <input required="" placeholder="" type="password" name="password" class="input" style="width: 400px;">
            <span>Password</span>
        </label>
        <label>
            <input required="" placeholder="" type="password" name="cfpassword" class="input" style="width: 400px;">
            <span>Confirm password</span>
        </label> 
                          
        </div>     
        <button class="submit"><a href="OTP.php">Next</a> </button>
        <p class="signin">Already have an acount ? <a href="homepage.php">Signin</a> </p>
    </form>
</body>
</html>