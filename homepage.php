<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homepage.css">
    <title>Document</title>

    <style>
            <?php
                include "css/homepage.css"
            ?>
        </style>
</head>
<body>
    
    <header>
        <h2 class="logo"><img src="assets/imgs/law-firm-logo.jpg"alt=""> Law Office General Santos City</h2>
            <nav class="navigation">
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Services</a>
                <a href="">Contact</a>
                <Button class="btnLogin-popup">Login</Button>
            </nav>
    </header>

    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="text" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required>  
                    <label>password</label> 
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remeber me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Dont have an account?<a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="text" required>
                    <label>First Name</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="text" required>
                    <label>Last Name</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="at"></ion-icon></span>
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required>
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="call"></ion-icon></span>
                    <input type="text" required>  
                    <label>Phone Number</label> 
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="document-outline"></ion-icon></span>
                    <label class="upload">Upload ID</label> 
                    <input type="file" required>  
                   
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="document-outline"></ion-icon></span>
                    <label class="upload">Upload Permit</label> 
                    <input type="file" required>  
                    
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account?<a href="#" class="Login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="assets/js/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>