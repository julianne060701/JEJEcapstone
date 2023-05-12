<?php
include "dbconn.php";

$sql = "SELECT tbl_userinfo.userinfo_id, tbl_userinfo.firstName, tbl_userinfo.middlename, tbl_userinfo.lastName, tbl_usertype.user_type, tbl_cred.email, tbl_contactinfo.address, tbl_contactinfo.phoneNum
FROM tbl_userinfo
JOIN tbl_usertype ON tbl_userinfo.userinfo_id = tbl_usertype.user_id
JOIN tbl_cred ON tbl_userinfo.userinfo_id = tbl_cred.user_id
JOIN tbl_contactinfo ON tbl_userinfo.userinfo_id = tbl_contactinfo.user_id
WHERE tbl_usertype.user_type = 'secretary'";

$result = mysqli_query($conn, $sql);

session_start(); 
if(isset($_GET['logout'])) { 
     session_unset();
     session_destroy();
     header("Location: homepage.php?logout");
     exit(); 
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="lawyerSecretary.css">
</head>

<body>
    <!-- =============== Navigation ================ -->

<!-- Button to trigger the modal -->


<!-- The popup -->
<div id="registerModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Add Secretary Account</h2>
    <form action="addsecretaryadmin.php" method="POST">
    <?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?> </p>
		<?php } ?>
        <div>
      <label for="firstname">First Name:</label>
      <input type="text" id="firstname" name="firstname">
      
      <label for="middlename">Middle Name: (OPTIONAL)</label>
      <input type="text" id="middlename" name="middlename">

      <label for="lastname">Last Name:</label>
      <input type="text" id="lastname" name="lastname">

      <label for="address">Address:</label>
      <textarea id="address" name="address"></textarea>
      
      <label for="contactNumber">Contact Number:</label>
      <input type="tel" id="contactNumber" name="contactNumber">
      
      <label for="email">Email Address:</label>
      <input type="text" id="email" name="email">

      <label for="password">Password:</label>
      <input type="password" id="password" name="password">

      <label for="password2">Confirm Password:</label>
      <input type="password" id="password2" name="password2">

    <button type="submit" class="submit" name="add">Add</button>
    </div>
    </form>
  </div>
</div>
<!-- end popup -->
  <div class="container">
        <div class="navigation">
        <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="assets/imgs/justice-scale.png" alt="" style="width: 66px; height: 66px;" >
                        </span>
                        <span class="title">Law Office Gensan</span>
                    </a>
                </li>

                <li>
                    <a href="Dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="appointmentlist.php">
                        <span class="icon">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </span>
                        <span class="title">Appointment List</span>
                    </a>
                </li>

                <li>
                    <a href="LawyerOfficeFinal.php">
                        <span class="icon">
                            <ion-icon name="business-outline"></ion-icon>
                        </span>
                        <span class="title">Law Office</span>
                    </a>
                </li>

                <li>
                    <a href="Lawyer.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Lawyer List</span>
                    </a>
                </li>
                <li>
                    <a href="secretarylist.php">
                        <span class="icon">
                            <ion-icon name="reader-outline"></ion-icon>
                        </span>
                        <span class="title">Secretary List</span>
                    </a>
                </li>
                <li>
                    <a href="clientlist.php">
                        <span class="icon">
                            <ion-icon name="reader-outline"></ion-icon>
                        </span>
                        <span class="title">Client List</span>
                    </a>
                </li>
                <li>
                    <a href="noticeboard.php">
                        <span class="icon">
                            <ion-icon name="notifications-outline"></ion-icon>
                        </span>
                        <span class="title">Notice Board</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li>
                    <a href="?logout" onclick="logout(event)">
                         <span class="icon">
                             <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>


        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here" id="search-input">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            

            <!-- ================ Table List ================= -->
             <div class="details">
                <div class="Appointment">
                    <div class="cardHeader">
                        <h2>Secretary List</h2>
                        <button id="registerBtn" class="btn">Add Secretary</button>
                    </div>
                    
                    <table id="lawoffice-table">
                        <thead>
                            <tr>
                             
                                <td>Secretary Name</td>
                                <td>Address</td>
                                <td>Contact Number</td>
                                <td>Email Address</td>
                                <td>Action</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <?php
                                

                                while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                    <td><?php echo $row['firstName'] . ' ' . $row['middlename'] . ' ' . $row['lastName'];?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['phoneNum']; ?></td>
                                    <td><?php echo $row['email']; ?></td>

                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
   
            </div>
        </div>
    </div>
    <!-- search script -->
    <script>
        const searchInput = document.getElementById('search-input');
        const lawofficeTable = document.getElementById('lawoffice-table');

        searchInput.addEventListener('keyup', function() {
        const searchTerm = searchInput.value.toLowerCase();
        const rows = lawofficeTable.getElementsByTagName('tr');
  
        for (let i = 0; i < rows.length; i++) {
        const fullName = rows[i].getElementsByTagName('td')[1].innerText.toLowerCase();
    
        if (fullName.includes(searchTerm)) {
        rows[i].style.display = '';
        } else {
        rows[i].style.display = 'none';
        }
     }
    });
    </script>
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>