<!DOCTYPE html>
<html>
  <head>
    <title>Client_HomePage</title>
    <link rel="stylesheet" href="userHome.css">
    <style>
      /* Profile dropdown*/
      .dropdown {
        position: relative;
        display: inline-block;
      }
      .dropdown-content {
    display: none;
    position: absolute;
    transform: translateZ(300px);
    background-color: #f9f9f9;
    min-width: 100px;
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
            <a href="editProfile.php">Profile</a>
            <a href="lawyerDashboard.php">Manage</a>
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

    <!-- Table with Picture, User Details and Action
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

    <!-- script logout -->
    <!-- <script>
        var timer;
        function resetTimer() {
            clearTimeout(timer);
            timer =setTimeout(logout, 120000);
        }
        function logout() {
            window.location.href = "homepage.php?logout";
        }
        resetTimer();
        document.addEventListener("mousemove", resetTimer);
        document.addEventListener("keypress", resetTimer);
    </script>  -->

    <style>
        /* CSS Styles */
        .container-xxl {
            max-width: 1400px;
            margin: 0 auto;
        }

        .text-start {
            text-align: left;
        }

        .property-item {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 15px;
        }

        .property-item img {
            width: 50%;
            height: auto;
        }

        .property-item h5 {
            color: #5D59AF;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .property-item a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }

        .property-item a:hover {
            text-decoration: underline;
        }

        .property-item p {
            margin: 0;
            color: #777;
        }

        .property-item small {
            display: block;
            color: #999;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .property-item i {
            margin-right: 5px;
        }
    </style>
</head>
<body>
<!-- Property List Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                    <h1 class="mb-3">Property Listing</h1>
                    <p>Here is the list of posted properties on the portal.</p>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href="viewProfile.php"><img class="img-fluid" src="image.jpg" alt=""/></a>
                                <div class="rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3" style="background: #5D59AF;">For Rent</div>
                                <div class="bg-white rounded-top position-absolute start-0 bottom-0 mx-4 pt-1 px-3" style="color: #5D59AF;">Apartment</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="mb-3" style="color: #5D59AF;">&#8369; 2000</h5>
                                <a class="d-block h5 mb-2" href="viewProfile.php">Property 1</a>
                                <p><i class="bx bxs-map me-2" style="color: #5D59AF;"></i>Property Address</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="bx bxs-door-open me-2" style="color: #5D59AF;"></i>5 Available Rooms</small>
                                <small class="flex-fill text-center border-end py-2"><i class="bx bxs-bed me-2" style="color: #5D59AF;"></i>2 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="bx bxs-bath me-2" style="color: #5D59AF;"></i>Bath - 2</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href="viewProfile.php"><img class="img-fluid" src="images/sample.jpg" alt=""/></a>
                                <div class="rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3" style="background: #5D59AF;">For Rent</div>
                                <div class="bg-white rounded-top position-absolute start-0 bottom-0 mx-4 pt-1 px-3" style="color: #5D59AF;">House</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="mb-3" style="color: #5D59AF;">&#8369; 3000</h5>
                                <a class="d-block h5 mb-2" href="viewProfile.php">Property 2</a>
                                <p><i class="bx bxs-map me-2" style="color: #5D59AF;"></i>Property Address</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="bx bxs-door-open me-2" style="color: #5D59AF;"></i>3 Available Rooms</small>
                                <small class="flex-fill text-center border-end py-2"><i class="bx bxs-bed me-2" style="color: #5D59AF;"></i>4 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="bx bxs-bath me-2" style="color: #5D59AF;"></i>Bath - 3</small>
                            </div>
                        </div>
                    </div>
                    <!-- Add more property items as needed -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Property List End -->


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </html>
          