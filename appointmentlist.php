<?php 
include "dbconn.php";

$sql = "SELECT tbl_appointment.appointment_id, tbl_userinfo.firstName, tbl_userinfo.lastName, tbl_officeinfo.office_name, tbl_appointment.appointment_timendate
FROM tbl_appointment
JOIN tbl_userinfo ON tbl_appointment.appointment_id = tbl_userinfo.userinfo_id
JOIN tbl_officeinfo ON tbl_appointment.appointment_id = tbl_officeinfo.office_id";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/lawOffice.css">
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
                    <a href="homepage.php">
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
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="Appointment">
                    <div class="cardHeader">
                        <h2>Appointment List</h2>
                    </div>

                    <table>
                        <thead>
                        <tr>
                                <td>Appointment ID</td>
                                <td>Client Name</td>
                                <td>Office Name</td>
                                <td>Time and Date</td>
                                <td>Action</td>
                            </tr>
                        </thead>

                        <tbody>
                        <tr>
                                <?php 

                                while($row = mysqli_fetch_assoc($result)) 
                                {
                                ?>
                                 <td><?php echo $row['appointment_id']; ?></td>
                                 <td><?php echo $row['firstName'] . ' ' . $row['lastName']; ?></td>
                                 <td><?php echo $row['office_name']; ?></td>
                                 <td><?php echo $row['appointment_timendate']; ?></td>
                                 <td><button class="method active">View</button><strong> </strong>
                             </tr>
                                <?php
                                }
                                 ?>
                        </tbody>
                    </table>
                </div>

            
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>