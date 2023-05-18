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
    <form class="form" action="lawyerregister.php" method="POST" enctype="multipart/form-data">
        
        
        <p class="title"> Lawyer Register </p>
        <?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?> </p>
		<?php } ?>
            <div class="flex">
            <label>
                <input placeholder="" type="text" name="firstname" class="input" style="width: 200px">
                <span>First name</span>
            </label>
    
            <label>
                <input placeholder="" type="text" name="middlename" class="input" style="width: 200px">
                <span>Middle Name</span>
            </label>
        </div> 
        
        <div class="flex">
            <label>
                <input placeholder="" type="text" name="lastname" class="input" style="width: 200px">
                <span>Last name</span>
            </label>
    
            <label>
                <input placeholder="" type="number" name="contactnum" class="input-number input" style="width: 200px">
                <span>Contact Number</span>
            </label>
        </div> 

        <div class="flex">       
        <label>
            <input placeholder="" type="email" name="email" class="input" style="width: 450px;">
            <span>Email </span>
        </label> 
        </div>
        <label>
            <input type="text" name="address" class="input" style="width: 450px">
            <span>Address</span>
        </label>

        <label>
            <input placeholder="" type="password" name="password" class="input" style="width: 450px;">
            <span>Password</span>
        </label>
        <label>
            <input placeholder="" type="password" name="cfpassword" class="input" style="width: 450px;">
            <span>Confirm password</span>
        </label>

        <div class="flex">
        <label>
            <input placeholder="" type="text" name="institutename" class="input"  style="width: 180px;">
            <span>Institute Name</span>
        </label> 
        
        <label>
            <input placeholder="" type="text" name="degree" class="input"  style="width: 80px;">
            <span>Degree</span>
        </label> 

        <label>
            <input placeholder="" type="text" name="passingyear" class="input"  style="width: 85px;">
            <span>Passing year</span>
        </label> 
        </div>

        <label>
            <input placeholder="" type="text" name="specialty" class="input"  style="width: 450px;">
            <span>Speciality</span>
        </label> 
     
        </div>     


        <div class="flex-file">
            <label>
                <p style="width: 200px;">Upload your Lawyer ID</p>
                <input  placeholder="" type="file" name="id" class="file input" style="width: 200px">
            </label>
            <label>
                <p style="width: 200px;">Upload Business permit</p>
                <input  placeholder="" type="file" name="permit" class="file input" style="width: 200px">
            </label>
        </div> 

        
        <button class="submit">Submit</a> </button>
        <p class="signin">Already have an acount ? <a href="homepage.php">Signin</a> </p>
    </form>

    
</body>
</html>