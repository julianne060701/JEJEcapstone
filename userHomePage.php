<!DOCTYPE html>
<html>
  <head>
    <title>Client_HomePage</title>
    <link rel="stylesheet" href="userHome.css">
  </head>
  <body>
    <!-- Fixed Header with Navigation -->
    <div class="header">
      <h1>Homepage</h1>
      <div class="nav">
        <a href="#"><ion-icon name="notifications-outline"></ion-icon>Notifacation</a>
        <a href="#"><img class="profile" src="https://picsum.photos/50" alt="Profile Picture"></a>
        
      </div>
    </div>
    
    <div class="search">
        <label>
            <input type="text" placeholder="Search here">
            <ion-icon name="search-outline"></ion-icon>
        </label>
    </div>

    <!-- Table with Picture, User Details and Action -->
    <table class="table">
    
    <?php 
    include "dbconn.php";

    $sql = "SELECT tbl_officeinfo.office_name, tbl_officeinfo.office_email, tbl_officecred.office_address, tbl_officecred.office_contact
    FROM tbl_officeinfo
    JOIN tbl_officecred ON tbl_officeinfo.office_id = tbl_officecred.office_credid
    WHERE tbl_officeinfo.office_status = 1";

    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
      ?>
      <tr>
      <td><img src="https://picsum.photos/50" alt="Profile Picture"></td>
      <td><?php echo $row['office_name']?></td>
      <td><?php echo $row['office_email']?></td>
      <td><?php echo $row['office_address']?></td>
      <td><?php echo $row['office_contact']?></td>
      <td><button>View Profile</button></td>
      </tr>
      <?php
    }
    ?>
        </tbody>
      </table>
    </body>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </html>
          