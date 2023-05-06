<!DOCTYPE html>
<html>
  <head>
    <title>Client_HomePage</title>
    <link rel="stylesheet" href="userHome.css">
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
    <!-- Fixed Header with Navigation -->
    <div class="header">
      <h1>Homepage</h1>
      <div class="nav">
        <a href="#"><ion-icon name="notifications-outline"></ion-icon>Notification</a>
        <div class="dropdown">
          <button class="dropbtn">
            <img class="profile" src="https://picsum.photos/50" alt="Profile Picture">
          </button>
          <div class="dropdown-content">
            <a href="#">Manage Profile</a>
            <a href="lawyerDashboard.php">Manage Dashboard</a>
            <a href="homepage.php">Log Out</a>
          </div>
        </div>
      </div>
    </div>

    <div class="search">
  <label>
    <input type="text" placeholder="Search here" id="search-input">
    <ion-icon name="search-outline"></ion-icon>
  </label>
</div>
    <!-- Table with Picture, User Details and Action -->
    <table class="table" id="office-table">
    
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
      <td><ion-icon name="mail-outline"></ion-icon><?php echo $row['office_email']?></td>
      <td><ion-icon name="navigate"></ion-icon><?php echo $row['office_address']?></td>
      <td><ion-icon name="call"></ion-icon><?php echo $row['office_contact']?></td>
      <td><button>View Profile</button></td>
      </tr>
      <?php
    }
    ?>
        </tbody>
      </table>
    </body>
    <script>
      const searchInput = document.getElementById('search-input');
      const officeTable = document.getElementById('office-table');

      searchInput.addEventListener('keyup', function() {
        const searchTerm = searchInput.value.toLowerCase();
        const rows =officeTable.getElementsByTagName('tr');

        for (let i = 0; i < rows.length; i++) {
          const fullName = rows[i].getElementsByTagName('td')[1].innerText.toLowerCase();

          if(fullName.includes(searchTerm)) {
            rows[i].style.display = '';
          }else {
            rows[i].style.display = 'none';
          }
        }
      });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </html>
          