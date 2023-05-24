<?php 
include "dbconn.php";

$sql = "SELECT tbl_officeinfo.office_id, tbl_officeinfo.office_name, tbl_officeinfo.office_email, tbl_officeinfo.office_status, tbl_officecred.office_address, tbl_officecred.office_contact

FROM tbl_officeinfo
JOIN tbl_officecred ON tbl_officeinfo.office_id = tbl_officecred.office_id";

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
    <link rel="stylesheet" href="LawyerOfficeFinal.css">
</head>

<body>
    <!-- =============== Navigation ================ -->

<!-- Button to trigger the modal -->


<!-- The popup -->
<div id="registerModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Register Office</h2>
    <form action="LawyerOfficeRegistration.php" method="POST">
      <label for="firmName">Firm Name:</label>
      <input type="text" id="firmName" name="firmName">
      
      <label for="address">Address:</label>
      <textarea id="address" name="address"></textarea>
      
      <label for="contactNumber">Contact Number:</label>
      <input type="tel" id="contactNumber" name="contactNumber">
      
      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email">

	<label for="num">Upload Lawyer Permit</label>
	<input type="file" class="form-control" name="permit" id="permit" oninput="CheckValue(this);"  >
    <label for="num">Law Office Image</label>
	<input type="file" class="form-control" name="fileToUpload" id="image" oninput="CheckValue(this);"  >
    <button type="submit">Submit</button>
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
                    <a href="adminlist.php">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="title">Admin List</span>
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

        <!-- ========================= Seacrh ==================== -->
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

            <!-- ======================= Dropdown Button Acitive/Inactive ================== -->

            
            

            <!-- ================ Table List ================= -->
            <div class="details">
                <div class="Appointment">
                    <div class="cardHeader">
                        <h2>Law Offices</h2>
                        <button id="registerBtn" class="btn">Register</button>
                    </div>
                    
                    <table id="lawoffice-table">
                        <thead>
                            <tr>
                                <td>Firm ID</td>
                                <td>Firm Name</td>
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
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                ?>
                                    <td><?php echo $row['office_id'] ?></td>
                                    <td><?php echo $row['office_name']; ?></td>
                                    <td><?php echo $row['office_address']; ?></td>
                                    <td><?php echo $row['office_contact']; ?></td>
                                    <td><?php echo $row['office_email']; ?></td>
                                    <td>
                                        <?php
                                        if($row['office_status'] == 0) {
                                            echo '<p><a href="activate.php?office_id='.$row['office_id'].'&status=1" class="method active">Accept</a></p>';
                                        }
                                        else {
                                            echo '<p><a href="activate.php?office_id='.$row['office_id'].'&status=0" class="method deactive">Deactivate</a></p>';
                                        }
                                        ?>
                                    </td>
                                    
                                    <td>
                                        <?php 
                                        if($row['office_status'] == 1) {
                                        echo '<span class="status delivered">ACTIVE</span>';
                                        } else {
                                            echo '<span class="status pending">INACTIVE</span>';
                                        }
                                        ?>
                                    </td>
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