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
    <title>Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
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
                        <span class="title">Lawyer</span>
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
                    <a href="login.php">
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
            <div class="cardBox">
                <div class="card">

                <?php 
                include "dbconn.php";
                $sql = "SELECT COUNT(*) as count FROM tbl_officeinfo WHERE office_status = 1";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                echo '<div>';
                echo '<div class="numbers">' . $row['count'] . '</div>';
                echo '<div class="cardName">Number of Law Office</div>';
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
                echo '<div class="cardName">Number of Attorney</div>';
                echo '</div>';
                ?>
                    <div class="iconBx">
                        <ion-icon name="reader-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Number of Appointment</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="list-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                <?php 
                include "dbconn.php";
                $sql = "SELECT COUNT(*) as count FROM tbl_officeinfo WHERE office_status = 0";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                echo '<div>';
                echo '<div class="numbers">' . $row['count'] . '</div>';
                echo '<div class="cardName">Pending Law Office Registration</div>';
                echo '</div>';
                ?>
                    <div class="iconBx">
                        <ion-icon name="business-outline"></ion-icon>
                    </div>
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
                                <td>Name</td>
                                <td>Appointment Type</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Ryan Burdo</td>
                                <td>Online</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Elmer Varquiz</td>
                                <td>Online</td>
                                <td><span class="status delivered ">Cpmplete</span></td>
                            </tr>

                            <tr>
                                <td>Neil Mark Luspo</td>
                                <td>Physical</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Esabel Bang</td>
                                <td>Physical</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td>Khytryn Carcillar</td>
                                <td>Online</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td>Ryan Burdo</td>
                                <td>Online</td>
                                <td><span class="status delivered ">Cpmplete</span></td>
                            </tr>

                            <tr>
                                <td>Jv Laroco</td>
                                <td>Physical</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td>Julie Ann Fernandez</td>
                                <td>Online</td>
                                <td><span class="status delivered ">Cpmplete</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Clients ================ -->
                <div class="recentClients">
                    <div class="cardHeader">
                        <h2>Recent Client</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                           <td>Jv Watapampa XD UV</td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Neil Mark Luspo <br> <span>Philippines</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Esabel Bang <br> <span>Philippines</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Julie Ann Fernandez <br> <span>Philippines</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Jv Laroco <br> <span>Philippines</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Khytryn Carcillar <br> <span>Philippines</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Khytryn Carcillar <br> <span>Philippines</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Neil Mark Luspo <br> <span>Philippines</span></h4>
                            </td>
                        </tr>
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