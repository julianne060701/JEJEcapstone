<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lawyer</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav-icon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/index.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="stylesheet" href="homepage.css">
    <title>Document</title>

    <!-- <style> -->
            <!-- <?php
                // include "css/homepage.css"
            // ?> -->
        <!-- </style> -->
</head>
<body>
     <img src="https://media.giphy.com/media/xT0xeJpnrWC4XWblEk/giphy.gif" alt="Giphy GIF" style="position: center">
     <img src="assets\imgs\giphy.gif" alt="Giphy GIF" style="position: absolute; top: 200px; right: 50px; width: 300px; height: 300px;">
     <img src="assets\imgs\among.gif" alt="Giphy GIF" style="position: absolute; top: 200px; right: 400px; width: 300px; height: 300px;">
    <header>
        <h2 class="logo"><img src="assets/imgs/law-firm-logo.jpg"alt=""> Law Office General Santos City</h2>
        <nav class="navigation">
    <a href="">Home</a>
    <a href="">About</a>
    <Button class="btnLogin-popup">Login</Button>
    <div class="dropdown">
        <button class="dropbtn btnLogin-popup">Register <span id="icon-ali"><ion-icon name="caret-down-outline"></ion-icon></span></button>
        <div class="dropdown-content">
            <a href="LawRegister.php">Lawyer Registration</a>
            <a href="ClientRegister.php">Client Registration</a>
        </div>
    </div>
</nav>

    </header>

    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="userlogin.php" method="POST" >
            <?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?> </p>
		<?php } ?>
                <div class="input-box">
                    <span class="icon"><ion-icon name="email"></ion-icon></span>
                    <input type="text" name="email">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="password"></ion-icon></span>
                    <input type="password" name="password">  
                    <label>password</label> 
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p><a href="#" class="register-link"></a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="userregister.php" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="text" name="firstname" >
                    <label>First Name</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="text" name="lastname">
                    <label>Last Name</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="at"></ion-icon></span>
                    <input type="text" name="email">  
                    <label>Email</label> 
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="navigate"></ion-icon></span>
                    <input type="text" name="address">
                    <label>Address</label>
                </div>           
                <div class="input-box">
                    <span class="icon"><ion-icon name="call"></ion-icon></span>
                    <input type="text" name="phone">  
                    <label>Phone Number</label> 
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password">
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="cfpassword">
                    <label>Confirm Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="document-outline"></ion-icon></span>
                    <label class="upload">Upload ID</label> 
                    <input type="file" name="uploadid">  
                   
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="document-outline"></ion-icon></span>
                    <label class="upload">Upload Permit</label> 
                    <input type="file" name="uploadpermit">  
                    
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

<!-- <section class="se-01">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headding-01">
                    <h2>Our Legal Practices Areas</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="far fa-landmark"></i>
                    </div>
                    <h3>Civil Law</h3>
                    <p>Our attorneys are highly trained and skilled in the Civil Law sector to provide the top service.</p>
                    <a href="#">Read More</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Family Law</h3>
                    <p>Our attorneys are highly trained and skilled in the Civil Law sector to provide the top service.</p>
                    <a href="#">Read More</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="fas fa-business-time"></i>
                    </div>
                    <h3>Business Law</h3>
                    <p>Our attorneys are highly trained and skilled in the Civil Law sector to provide the top service.</p>
                    <a href="#">Read More</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="fab fa-battle-net"></i>
                    </div>
                    <h3>Cyber Law</h3>
                    <p>Our attorneys are highly trained and skilled in the Civil Law sector to provide the top service.</p>
                    <a href="#">Read More</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>Criminal Law</h3>
                    <p>Our attorneys are highly trained and skilled in the Civil Law sector to provide the top service.</p>
                    <a href="#">Read More</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Education Law</h3>
                    <p>Our attorneys are highly trained and skilled in the Civil Law sector to provide the top service.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="_kl_de_w">
                        <h3>Lawyer</h3>
                        <p>ipsum dolor sit amet, Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="_kl_de_w">
                        <h3>Quick Links</h3>
                        <ol>
                            <li><i class="far fa-angle-right"></i>home</li>
                            <li><i class="far fa-angle-right"></i>About Us</li>
                            <li><i class="far fa-angle-right"></i>Services</li>
                            <li><i class="far fa-angle-right"></i>Blog</li>
                            <li class="last"><i class="far fa-angle-right"></i>Contact Us</li>
                        </ol>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="_kl_de_w">
                        <h3>Our Legal</h3>
                        <ol>
                            <li><i class="far fa-angle-right"></i>Civil Law</li>
                            <li><i class="far fa-angle-right"></i>Family Law</li>
                            <li><i class="far fa-angle-right"></i>Business Law</li>
                            <li><i class="far fa-angle-right"></i>Cyber Law</li>
                            <li class="last"><i class="far fa-angle-right"></i>Criminal Law</li>
                        </ol>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="_kl_de_w">
                        <h3>Contact Us</h3>
                        <form class="my-form">
                            <div class="form-group">
                               <input class="form-control" type="emal" name="email" placeholder="Email"> 
                            </div>
                            <div class="form-group">
                                <textarea rows="3" placeholder="Message" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <a href="#">Submit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
<script src="assets/js/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>