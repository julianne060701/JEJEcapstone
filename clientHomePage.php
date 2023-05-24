<!DOCTYPE html>
<html>
  <head>
    <title>Client Homepage</title>
    <link rel="stylesheet" href="clientHomePage.css">
    <style>
      /* Profile dropdown*/
      .dropdown {
        position: relative;
        display: inline-block;
        
      }
      .dropdown-content {
    display: none;
    position: absolute;
    transform: translateZ(300px);
    background-color: #f9f9f9;
    min-width: 100px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
  }
  
  .dropdown-content a {
    color: black;
    padding: 12px 10px;
    text-decoration: none;
    display: block;
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
  }

  .fixplacement{
    display: flex;
    justify-content: center;
    align-items: center;
  }
</style>
<style>
  #noti-dropdown {
  position: absolute;
  top: 55px; /* Adjust the distance from the top as needed */
  right: 200px;
  width: 500px;
  background-color: #f9f9f9;
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 10px;
  z-index: 1;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

#noti-dropdown a {
  display: block;
  padding: 8px 10px;
  text-decoration: none;
  color: #333;
}

#noti-dropdown a:hover {
  background-color: #f5f5f5;
}

#noti-dropdown a:last-child {
  border-bottom: none;
}

#noti-dropdown ion-icon {
  margin-right: 5px;
}
</style>
  </head>
  <body>
    <!-- Fixed Header with Navigation -->
    <div class="header">
    <h1><a href="clientHomePage.php" style="text-decoration: none; color: inherit;">Homepage</a></h1>
      <div class="search">
      <label>
  <span><ion-icon name="search-outline"></ion-icon></span>
  <input type="text" placeholder="Search here" id="search-input" onkeypress="handleKeyPress(event)">
</label>
    </div>
      <div class="nav">
      <div class="fixplacement">
    
    </div>
    <a href="#" onclick="toggleDropdown(event)">
  <ion-icon name="notifications-outline"></ion-icon>Notification
</a>

<div id="noti-dropdown" style="display: none; color: #333;">
   Dropdown content goes here 
   Add your desired notification items or any other content 
</div>
        <div class="dropdown">
          <button class="dropbtn">
            <img class="profile" src="https://picsum.photos/50" alt="Profile Picture">
          </button>
          <div class="dropdown-content">
            <a href="editProfile.php">Profile</a>
            <a href="lawyerDashboard.php">Manage</a>
            <a href="?logout" onclick="logout(event)">Log out </a>
            <?php
              session_start(); 
              if(isset($_GET['logout'])) { 
                session_unset();
                session_destroy();
                header("Location: homepage.php?logout");
                exit(); 
              }
            ?>
          </div>
        </div>
      </div>
    </div>
</head>
<body>


<div class="main_header">
        <span class="text first-text">Law office General Santos City</span> <br> <br> <br>
        <span class="text sec-text"></span>

        <!-- picture ni sya sa baba -->
  <img src="atorneydawsya.png" alt="">

  <div class="tablediv">
    <div class="advertise">
      <h2>Follow us on!</h2>
      <img src="facebook (2).png" alt="">
      <button>
      Follow Us!
      </button>
    </div>
    <div class="advertise">
    <h2>Follow us on!</h2>
    <img src="twitter.png" alt="">
      <button>
        Follow Us!
      </button>
    </div>

    <div class="advertise">
    <h2>Follow us on!</h2>
    <img src="instagram.png" alt="">
      <button>
      Follow Us!
      </button>
    </div>
</div>
</div>

<script>
        const text = document.querySelector(".sec-text");

        const textLoad = () => {
            setTimeout(() => {
                text.textContent = "The first duty of society is justice.";
            }, 0);
            setTimeout(() => {
                text.textContent = "The law is reason, free from passion.";
            }, 4000);
            setTimeout(() => {
                text.textContent = "In the face of injustice, the law becomes our shield.";
            }, 8000);
            setTimeout(() => {
                text.textContent = "A lawyer's true strength lies in upholding truth and justice.";
            }, 12000); //1s = 1000 milliseconds
            
        }

        textLoad();
        setInterval(textLoad, 16000);
    </script>  

   <!-- script idle logout -->
    <script>
        var timer;
        function resetTimer() {
            clearTimeout(timer);
            timer =setTimeout(logout, 120000);
        }
        function logout() {
            window.location.href = "homepage.php?logout";
        }
        resetTimer();
        document.addEventListener("mousemove", resetTimer);
        document.addEventListener("keypress", resetTimer);
    </script> 

<!-- script for search -->
<script>
function handleKeyPress(event) {
    if (event.key === 'Enter') {
        search();
    }
}

function search() {
    var searchValue = document.getElementById('search-input').value;
    window.location.href = 'clientHomePage.php?search=' + searchValue;
}
</script>

<!-- notification script -->
<script>
  function toggleDropdown(event) {
    var dropdown = document.getElementById("noti-dropdown");
    
    if (dropdown.style.display === "none") {
      dropdown.style.display = "block";
      document.addEventListener("click", hideDropdown);
    } else {
      dropdown.style.display = "none";
      document.removeEventListener("click", hideDropdown);
    }
    
    event.stopPropagation();
  }

  function hideDropdown() {
    var dropdown = document.getElementById("noti-dropdown");
    dropdown.style.display = "none";
    document.removeEventListener("click", hideDropdown);
  }
</script>


<script src="asd.js"></script>
<script src="asdf.js"></script>
<script>
VANTA.RINGS({
  el: ".main_header",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00,
  backgroundColor:  0x1e4a,
})
</script>

<!-- container starts here -->
<h1 class="lawofficeHeaderfind">Find Law Office</h1>
<h2 class="lawofficeHeaderfind2">Guiding You to Justice and Legal Solutions</h2>
<div class="container">


<?php 
 include 'dbconn.php';

 // Check if the search query is submitted
 if (isset($_GET['search']) && !empty($_GET['search'])) {
     $search = $_GET['search'];
     // Add the search condition to the SQL query
     $sql = "SELECT tbl_officeinfo.office_name, tbl_officeinfo.office_email, tbl_officecred.office_address, tbl_officecred.office_contact
     FROM tbl_officeinfo
     JOIN tbl_officecred ON tbl_officeinfo.office_id = tbl_officecred.office_credid
     WHERE tbl_officeinfo.office_status = 1 AND (tbl_officeinfo.office_name LIKE '%$search%' OR tbl_officeinfo.office_email LIKE '%$search%')";
 } else {
     // Default query without search
     $sql = "SELECT tbl_officeinfo.office_name, tbl_officeinfo.office_email, tbl_officecred.office_address, tbl_officecred.office_contact
     FROM tbl_officeinfo
     JOIN tbl_officecred ON tbl_officeinfo.office_id = tbl_officecred.office_credid
     WHERE tbl_officeinfo.office_status = 1";
 }

 $result = mysqli_query($conn, $sql);
 
 if (mysqli_num_rows($result) > 0) {
     while ($row = mysqli_fetch_assoc($result)) {
         echo '<div class="content">';
         echo '<div class="picture">';
         echo '<button>view profile</button>';
         echo '<img src="https://www.lowmanlawfirm.com/hs-fs/hubfs/Lowman_Law_Firm.jpg?width=894&name=Lowman_Law_Firm.jpg" alt="">';
         echo '</div>';
         echo '<div class="tagname"><label>Firm Name: ' . $row['office_name'] . '</label></div>';
         echo '<div class="tagname"><label>Email: ' . $row['office_email'] . '</label></div>';
         echo '<div class="tagname"><label>Location: ' . $row['office_address'] . '</label></div>';
         echo '<div class="tagname"><label>Contact: ' . $row['office_contact'] . '</label></div>';
         echo '</div>';
     }
 } else {
     echo 'No data found.';
 }
?>

</div>
<!-- container ends here -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </html>
          