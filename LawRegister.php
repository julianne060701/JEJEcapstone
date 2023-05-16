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
<body>
    <style>body{
        background: url("assets/images/slider/main.jpg") no-repeat center center fixed;
        background-size: cover;
    }
    </style>
    <form class="form" action="lawyerregister.php" method="POST">
        
        
        <p class="title"> Lawyer Register </p>
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
            <input required="" placeholder="" type="email" name="email" class="input" style="width: 400px;">
            <span>Email </span>
        </label> 
        <!-- <button id="myButton" class="myClass" style="color: red;" onclick="alert('Check your email')">Send OTP</button> -->
        </div>
            

        <!-- <div class="flex">       
        <label>
            <input required="" placeholder="" type="otp" name="otp" class="input">
            <span>OTP </span>
        </label> 
        <button id="myButton" class="myClass" style="color: red;" onclick="alert('Verified')">Verify</button>
        </div> -->

        <label>
            <input required="" placeholder="" type="password" name="password" class="input" style="width: 400px;">
            <span>Password</span>
        </label>
        <label>
            <input required="" placeholder="" type="password" name="cfpassword" class="input" style="width: 400px;">
            <span>Confirm password</span>
        </label>

        <div class="flex">
        <label>
            <input required="" placeholder="" type="text" class="input"  style="width: 180px;">
            <span>Institute Name</span>
        </label> 
        
        <label>
            <input required="" placeholder="" type="text" class="input"  style="width: 80px;">
            <span>Degree</span>
        </label> 

        <label>
            <input required="" placeholder="" type="text" class="input"  style="width: 80px;">
            <span>Passing year</span>
        </label> 
        </div>

        <label>
            <input required="" placeholder="" type="text" class="input"  style="width: 400px;">
            <span>Speciality</span>
        </label> 
     
        </div>     


        <div class="flex-file">
            <label>
                <p style="width: 200px;">Upload your Lawyer ID</p>
                <input  placeholder="" type="file" name="id" class="file input" width="400px">
            </label>
            <label>
                <p style="width: 200px;">Upload Business permit</p>
                <input  placeholder="" type="file" name="permit" class="file input">
            </label>
        </div> 

        
        <button class="submit"><a href="OTP.php">Submit</a> </button>
        <p class="signin">Already have an acount ? <a href="homepage.php">Signin</a> </p>
    </form>

    
</body>
</html>