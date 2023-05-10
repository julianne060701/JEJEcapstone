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

<img src="assets\imgs\among.gif" alt="Giphy GIF" style="position: absolute; top: 200px; right: 100px; width: 300px; height: 300px;">
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
                
        <div class="flex">       
        <label>
            <input required="" placeholder="" type="email" name="email" class="input">
            <span>Email </span>
        </label> 
        <button id="myButton" class="myClass" style="color: red;" onclick="alert('Check your email')">Send OTP</button>
        </div>
            

        <div class="flex">       
        <label>
            <input required="" placeholder="" type="otp" name="otp" class="input">
            <span>OTP </span>
        </label> 
        <button id="myButton" class="myClass" style="color: red;" onclick="alert('Verified')">Verify</button>
        </div> 
            
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