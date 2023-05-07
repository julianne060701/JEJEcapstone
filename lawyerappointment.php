<?php
include "dbconn.php";

$sql = "SELECT tbl_userinfo.userinfo_id, tbl_userinfo.firstName, tbl_userinfo.lastName, tbl_userinfo.address, tbl_userinfo.phoneNum, tbl_usertype.user_type, tbl_cred.email
FROM tbl_userinfo
JOIN tbl_usertype ON tbl_userinfo.userinfo_id = tbl_usertype.user_id
JOIN tbl_cred ON tbl_userinfo.userinfo_id = tbl_cred.user_id
WHERE tbl_usertype.user_type = 'client'";

$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawyer Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="LawyerOfficeFinal.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
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
                    <a href="lawyerDashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Lawyer</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="reader-outline"></ion-icon>
                        </span>
                        <span class="title">Appointment</span>
                    </a>
                </li>

                <li>
                    <a href="lawyerSecretary.php">
                        <span class="icon">
                            <ion-icon name="reader-outline"></ion-icon>
                        </span>
                        <span class="title">Secretary List</span>
                    </a>
                </li>
                <li>
                    <a href="#">
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
                    <?php
                    session_start(); 
                    if(isset($_GET['logout'])) { 
                         session_unset();
                         session_destroy();
                         header("Location: homepage.php?logout");
                         exit(); 
                        }
                    ?>
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
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

        
                <!-- ================ Table List ================= -->
                <div class="details">
                <div class="Appointment">
                    <div class="cardHeader">
                        <h2>Appointment List</h2>
                    </div>
                    
                    <table id="lawoffice-table">
                        <thead>
                            <tr>
                                <td>Appointment ID</td>
                                <td>Client Name</td>
                                <td>Contact Number</td>
                                <td>Email Address</td>
                                <td>Date/Time</td>
                                <td>Action</td>
                                <td>Status</td>
                            </tr>
                        </thead>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>