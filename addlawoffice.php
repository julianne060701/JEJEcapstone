<?php
include "dbconn.php";

$sql = "SELECT tbl_userinfo.userinfo_id, tbl_userinfo.firstName, tbl_userinfo.lastName, tbl_contactinfo.address, tbl_contactinfo.phoneNum, tbl_usertype.user_type, tbl_cred.email
FROM tbl_userinfo
JOIN tbl_usertype ON tbl_userinfo.userinfo_id = tbl_usertype.user_id
JOIN tbl_cred ON tbl_userinfo.userinfo_id = tbl_cred.user_id
JOIN tbl_contactinfo ON tbl_userinfo.userinfo_id = tbl_contactinfo.user_id
WHERE tbl_usertype.user_type = 'client'";

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
    <title>Lawyer Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
      /* Add your existing CSS styles here */
      .dropdown {
        position: relative;
        display: inline-block;
      }
      .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
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
</style>
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
                   <a href="addLawoffice.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Add Law Office</span>
                    </a>
                </li>

                <li>
                    <a href="lawyercalendar.php">
                        <span class="icon">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </span>
                        <span class="title">Calendar</span>
                    </a>
                </li>

             
                <li>
                    <a href="lawyerappointment.php">
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
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>


          <div class="dropdown-content">
            <a href="#">Homepage</a>
            <a href="lawyerDashboard.php">Manage Profile</a>
            <a href="homepage.php">Log Out</a>
          </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">

                <?php 
                include "dbconn.php";
                $sql = "SELECT COUNT(*) as count FROM tbl_officeinfo WHERE office_status = 1";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                echo '<div>';
                echo '<div class="numbers">' . $row['count'] . '</div>';
                echo '<div class="cardName">Number of Secretary</div>';
                echo '</div>';
                ?>
                    <div class="iconBx">
                        <ion-icon name="business-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                <?php 
                include "dbconn.php";
                $sql = "SELECT COUNT(*) as count FROM tbl_usertype WHERE user_type = 'lawyer'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                echo '<div>';
                echo '<div class="numbers">' . $row['count'] . '</div>';
                echo '<div class="cardName">Number of Lawyer</div>';
                echo '</div>';
                ?>
                    <div class="iconBx">
                        <ion-icon name="reader-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                <?php 
                include "dbconn.php";
                $sql = "SELECT COUNT(*) as count FROM tbl_appointment";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                echo '<div>';
                echo '<div class="numbers">' . $row['count'] . '</div>';
                echo '<div class="cardName">Number of Appointment</div>';
                echo '</div>';
                ?>

                    <div class="iconBx">
                        <ion-icon name="list-outline"></ion-icon>
                    </div>
                </div>


            <!-- ================ Appointment Details List ================= -->
            <div class="details">
                <div class="Appointment">
                    <div class="cardHeader">
                        <h2>Recent Appointment</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Client Name</td>
                                <td>Office Name</td>
                                <td>Time and Date</td>
                            </tr>
                        </thead>

                        <tbody>
                        <?php 
                            include "dbconn.php";

                            $sql = "SELECT tbl_appointment.appointment_id, tbl_userinfo.firstName, tbl_userinfo.lastName, tbl_officeinfo.office_name, tbl_appointment.appointment_timendate
                            FROM tbl_appointment
                            JOIN tbl_userinfo ON tbl_appointment.appointment_id = tbl_userinfo.userinfo_id
                            JOIN tbl_officeinfo ON tbl_appointment.appointment_id = tbl_officeinfo.office_id";

                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                            <td><?php echo $row['firstName'] . ' ' . $row['lastName']?></td>
                            <td><?php echo $row['office_name']?></td>
                            <td><?php echo $row['appointment_timendate']?></td>
                            </tr>
                            <?php
                          }
                          ?>
                        </tbody>
                        </tbody>
                    </table>
                </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>