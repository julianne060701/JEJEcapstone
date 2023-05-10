<!doctype html>
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
    <style>
.dropbtn {
    list-style: none; 
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #353333;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.show {display: block;}

.popup {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.7);
  z-index: 9999;
}

.popup-content {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 50%;
  height: 50%;
  margin: auto;
  background-color: white;
  padding: 20px;
}
.popup {
    /* Your popup styles here */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .popup-content {
    /* Your popup content styles here */
    position: relative;
    width: 300px;
    height: 400px;
    background-color: white;
    border-radius: 10px;
    padding: 20px;
  }

  .close-icon {
    /* Your close icon styles here */
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 20px;
    cursor: pointer;
  }
.close-btn {
  margin-top: 10px;
}

.close-btn:hover {
  cursor: pointer;
  background-color: #ccc;
}

</style>
</head>

<body>
    <header>
        <div class="_main_nav">
            <div class="container">
                <div class="row">
                    <div class="nav">
                        <div class="logo-01">
                            <h1>lawyer</h1>
                        </div>
                        <div class="menu-toggle"></div>
                        <div class="my-nav">
    <div class="menu">
        <ul>
            <li class="logo"><a href="mainhomepage.php">Lawyer</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="about-us.php">About</a></li>
            <li class="nav-item"><a href="#" class="btnLogin-popup">Login</a></li>
            <div class="dropdown">
  <li onclick="myFunction()" class="dropbtn">Register</li>
  <div id="myDropdown" class="dropdown-content">
    <a href="LawRegister.php">Lawyer Registration</a>
    <a href="ClientRegister.php">Client Registration</a>
  </div>
</div>

        </ul>
    </div>
</div>


                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- popup login -->
<div id="login-popup" class="popup">
  <div class="popup-content" style="text-align: center;">
    <h2>Login</h2>
    <form action="" method="POST">
      <input type="text" placeholder="Email" name="email">
      <input type="password" placeholder="Password" name="password">
      <div class="forgot-password">
        <a href="#">Forgot Password?</a>
      </div>
      <input type="submit" value="Login">
    </form>
    <a class="close-icon" onclick="closePopup()">X</a>
  </div>
</div>

end popup
<section class="slider">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="slider-content">
                    <h2>Connecting You to Top Law Firms in General Santos City - Schedule Your Legal Consultation Today!</h2>
                    <p>"Welcome to our appointment service portal connecting you to the best law offices in General Santos City 
                        - where you can easily schedule and book legal consultations for efficient and effective solutions to your legal needs." </p>
                  
                </div>
            </div>
        </div>
    </div>
</section>

<section class="se-01">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headding-01">
                    <h2>Legal Practices Areas</h2>
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
                    <p>Civil law is a legal system based on written laws that define the rights and obligations of individuals and organizations in relation to each other.</p>
                    <a href="#">Read More</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Family Law</h3>
                    <p>Family law is an area of the legal system that deals with matters related to family relationships, such as marriage, divorce, child custody, adoption, and domestic violence.</p>
                    <a href="#">Read More</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="fas fa-business-time"></i>
                    </div>
                    <h3>Business Law</h3>
                    <p>Business law, also known as commercial law, is a legal area that deals with the rights, relations, and conduct of businesses and individuals engaged in commerce, including contract law, intellectual property law, and employment law.</p>
                    <a href="#">Read More</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="fab fa-battle-net"></i>
                    </div>
                    <h3>Cyber Law</h3>
                    <p>Cyber law, also known as internet law, is a legal field that deals with the regulation of the internet, cyberspace, and technology, including electronic commerce, online privacy, data protection, and cybercrime.</p>
                    <a href="#">Read More</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>Criminal Law</h3>
                    <p>Criminal law is a legal system that deals with offenses committed against the public, including crimes such as murder, theft, assault, and fraud, and the procedures and penalties for prosecuting and punishing those who commit such crimes.</p>
                    <a href="#">Read More</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="box-se">
                    <div class="icon-box-se">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Education Law</h3>
                    <p>Education law is a legal area that governs the operation of educational institutions and the rights and responsibilities of students, parents, and teachers, including matters such as academic freedom, discrimination, school funding, special education, and student discipline.</p>
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

            </div>
        </div>
    </footer>
  <script>
  function openPopup() {
    document.getElementById("login-popup").style.display = "block";
  }

  function closePopup() {
    document.getElementById("login-popup").style.display = "none";
  }

  document.querySelector(".btnLogin-popup").addEventListener("click", openPopup);
</script>

</body>
<script>
    
</script>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>
      $(document).ready (function(){
        $('.menu-toggle').click(function(){
          $('.menu-toggle').toggleClass('active')
          $('.menu').toggleClass('active')
        })
      })
</script>

 <script>
      $( () => {
    
        //On Scroll Functionality
        $(window).scroll( () => {
          var windowTop = $(window).scrollTop();
          windowTop > 50 ? $('header').addClass('og-hf') : $('header').removeClass('og-hf');
        });
      });
    </script>
</html>