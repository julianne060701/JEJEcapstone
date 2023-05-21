<?php
include "dbconn.php";

$sql = "SELECT tbl_userinfo.userinfo_id, tbl_userinfo.firstName, tbl_userinfo.lastName, tbl_contactinfo.address, tbl_contactinfo.phoneNum, tbl_usertype.user_type, tbl_cred.email
FROM tbl_userinfo
JOIN tbl_usertype ON tbl_userinfo.userinfo_id = tbl_usertype.user_id
JOIN tbl_cred ON tbl_userinfo.userinfo_id = tbl_cred.user_id
JOIN tbl_contactinfo ON tbl_userinfo.userinfo_id = tbl_contactinfo.user_id
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
    <link rel="stylesheet" href="assets/css/lawyercalendar.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="assets/imgs/justice-scale.png" alt="" style="width: 66px; height: 66px;">
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
                    <?php
                    session_start();
                    if (isset($_GET['logout'])) {
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


                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>


            <!-- ================ Calendar ================= -->

  <div class="content">
    <div class="calendar-container">
      <div class="calendar"> 
        <div class="year-header"> 
          <span class="left-button" id="prev"> &lang; </span> 
          <span class="year" id="label"></span> 
          <span class="right-button" id="next"> &rang; </span>
        </div> 
        <table class="months-table"> 
          <tbody>
            <tr class="months-row">
              <td class="month">Jan</td> 
              <td class="month">Feb</td> 
              <td class="month">Mar</td> 
              <td class="month">Apr</td> 
              <td class="month">May</td> 
              <td class="month">Jun</td> 
              <td class="month">Jul</td>
              <td class="month">Aug</td> 
              <td class="month">Sep</td> 
              <td class="month">Oct</td>          
              <td class="month">Nov</td>
              <td class="month">Dec</td>
            </tr>
          </tbody>
        </table> 
        
        <table class="days-table"> 
          <td class="day">Sun</td> 
          <td class="day">Mon</td> 
          <td class="day">Tue</td> 
          <td class="day">Wed</td> 
          <td class="day">Thu</td> 
          <td class="day">Fri</td> 
          <td class="day">Sat</td>
        </table> 
        <div class="frame"> 
          <table class="dates-table"> 
              <tbody class="tbody">             
              </tbody> 
          </table>
        </div> 
        <button class="button" id="add-button">Customize the Slot</button>
      </div>
    </div>
    <div class="events-container">
    </div>
    <div class="dialog" id="dialog">
        <h2 class="dialog-header"> SLOT </h2>
        <div class="dtabg">
        <button>7:00AM</button>
        <button>8:00AM</button>
        <button>9:00AM</button>
        <button>12:00PM</button>
        <button>1:00PM</button>
        <button>2:00PM</button>
        </div>
        <form class="form" id="form">
          <div class="form-container" align="center">
            <label class="form-label" id="valueFromMyButton" for="name">Title</label>
            <input class="input" type="text" id="name" maxlength="36">
            <label class="form-label" id="valueFromMyButton" for="count">Number of Slot</label>
            <input class="input" type="number" id="count" min="0" max="1000000" maxlength="7">
            <input type="button" value="Cancel" class="button" id="cancel-button">
            <input type="button" value="OK" class="button" id="ok-button">
          </div>
        </form>
      </div>
  </div>
  
  <!-- Dialog Box-->
  <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous">
  </script>
  <script src="app.js"></script>

    
<!-- =========== Scripts =========  -->
<script src="assets/js/main.js"></script>
<script src = "assets/js/lawyercalendar.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>