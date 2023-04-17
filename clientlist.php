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
                    <a href="lawyerOffice.php">
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
            

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="Appointment">
                    <div class="cardHeader">
                        <h2>Client</h2>
                        <a href="#" class="btn">Add Client</a>
                    </div>

                    <table>
                        <thead>
                        <tr>
                                <td>Profile</td>
                                <td>Full Name</td>
                                <td>Address</td>
                                <td>Contact</td>
                                <td>Email Address</td>
                                <td>Appointment</td>
                                <td>Action</td>
                            </tr>
                        </thead>

                        <tbody>
                        <tr>
                                <td>Photos</td>
                                <td>Jv Laroco </td>
                                <td>Brgy. Apopong</td>
                                <td>09485344156</td>
                                <td>jvlaroco@gmail.com</td>
                                <td>April 12, 2023 08:00-09:00 AM</td>
                                <td><button class="method active">View</button><strong> </strong>
                            </tr>

                            <tr>
                                <td>Photos</td>
                                <td>Jv Varquez</td>
                                <td>Brgy. Apopong</td>
                                <td>0943493232</td>
                                <td>ryanvarquez@gmail.com</td>
                                <td>Political Science</td>
                                <td><button class="method active">View</button><strong> </strong>
                            </tr>
                            <tr>
                                <td>Photos</td>
                                <td>Neil Burdo</td>
                                <td>Brgy. Apopong</td>
                                <td>0943493232</td>
                                <td>ryanvarquez@gmail.com</td>
                                <td>Political Science</td>
                                <td><button class="method active">View</button><strong> </strong>
                            </tr>
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