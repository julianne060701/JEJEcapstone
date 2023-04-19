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
                    <a href="lawyerhomepage.php">
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
                    <a href="#">
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

        
            <!-- ================ Appointment Details List ================= -->
            <form method="post" action="appointment.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <label for="client_name">Client Name</label>
  <input type="text" name="client_name" value="<?php echo $client_name; ?>">
  <label for="contact">Contact</label>
  <input type="text" name="contact" value="<?php echo $contact; ?>">
  <label for="date_time">Date/Time</label>
  <input type="datetime-local" name="date_time" value="<?php echo $date_time; ?>">
  <label for="action">Action</label>
  <select name="action">
    <option value="cancel" <?php if ($action == 'cancel') echo 'selected'; ?>>Cancel</option>
    <option value="reschedule" <?php if ($action == 'reschedule') echo 'selected'; ?>>Reschedule</option>
  </select>
  <label for="status">Status</label>
  <select name="status">
    <option value="completed" <?php if ($status == 'completed') echo 'selected'; ?>>Completed</option>
    <option value="pending" <?php if ($status == 'pending') echo 'selected'; ?>>Pending</option>
  </select>
  <button type="submit" name="save">Save</button>
  <button type="submit" name="delete">Delete</button>
</form>


    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>