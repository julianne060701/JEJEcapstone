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










    <!-- <style>
        CSS Styles
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
    </style> -->

    <style>
/* *{
  outline: dashed red 1px;
} */
.container{
            max-width: 1400px;
           margin: 50px 0px 0px 70px;
            /* background: red; */
            display: flex;
            align-items: center;
            justify-content: first baseline;
            flex-direction: row;
            flex-wrap: wrap;
            box-sizing: border-box;
            padding: 20px 80px;
           
}

.container .content{
background: #d8d8d8;
position: relative;
/* width: 325px; */
width: 600px;
height: 700px;
margin-left: 10px;
margin-top: 10px;
box-sizing: border-box;
padding: 2px;
box-shadow: 0px 0px 5px 0px;

}

.container .content .picture{
  background: orange;
  width: 100%;
  position: relative;
  height: 500px;
  margin-bottom: 30px;
  
}

.container .content .picture img{
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  width: 100%;
  height: 100%;
}

.container .content button{
position: relative;
left: 0;
top: 0;
width: fit-content;
transform: translate(15px,20px);
}

.container .content .tagname{
  margin-top: 20px;
  margin-left: 15px;
}

.container .content .tagname label{
  margin-top: 13px;
  font-weight: 500;
  font-size: 20px;
}



.container .content button {
    
    padding: 15px 25px;
    border: unset;
    border-radius: 15px;
    color: #212121;
    z-index: 1;
    background: #e8e8e8;
    position: absolute;
    font-weight: 1000;
    font-size: 14px;
    -webkit-box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
    box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
    transition: all 250ms;
    overflow: hidden;
   }
   
  .container .content button::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 0;
    border-radius: 15px;
    background-color: #212121;
    z-index: -1;
    -webkit-box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
    box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
    transition: all 250ms
   }
   
  .container .content button:hover {
    color: #e8e8e8;
   }
   
  .container .content button:hover::before {
    width: 100%;
   }

    </style>
</head>
<body>



<div class="container">

   <!-- content start here -->
  <div class="content">
    <div class="picture">
    <button>view profile</button>
      <img src="https://www.lowmanlawfirm.com/hs-fs/hubfs/Lowman_Law_Firm.jpg?width=894&name=Lowman_Law_Firm.jpg" alt="">
    </div>
    <div class="tagname"><label>FirmName: Law Office Gensan</label></div> 
    <div class="tagname"><label>Email: Ann@Gmail.com</label></div>
    <div class="tagname"><label>Location: General Santos City</label></div>
    <div class="tagname"><label>Contact: 09217381873</label></div>
  </div>

  <div class="content">
    <div class="picture">
    <button>view profile</button>
      <img src="https://www.lowmanlawfirm.com/hs-fs/hubfs/Lowman_Law_Firm.jpg?width=894&name=Lowman_Law_Firm.jpg" alt="">
    </div>
    <div class="tagname"><label>FirmName: Law Office Gensan</label></div> 
    <div class="tagname"><label>Email: Ann@Gmail.com</label></div>
    <div class="tagname"><label>Location: General Santos City</label></div>
    <div class="tagname"><label>Contact: 09217381873</label></div>
  </div>


  <div class="content">
    <div class="picture">
    <button>view profile</button>
      <img src="https://www.lowmanlawfirm.com/hs-fs/hubfs/Lowman_Law_Firm.jpg?width=894&name=Lowman_Law_Firm.jpg" alt="">
    </div>
    <div class="tagname"><label>FirmName: Law Office Gensan</label></div> 
    <div class="tagname"><label>Email: Ann@Gmail.com</label></div>
    <div class="tagname"><label>Location: General Santos City</label></div>
    <div class="tagname"><label>Contact: 09217381873</label></div>
  </div>

  <div class="content">
    <div class="picture">
    <button>view profile</button>
      <img src="https://www.lowmanlawfirm.com/hs-fs/hubfs/Lowman_Law_Firm.jpg?width=894&name=Lowman_Law_Firm.jpg" alt="">
    </div>
    <div class="tagname"><label>FirmName: Law Office Gensan</label></div> 
    <div class="tagname"><label>Email: Ann@Gmail.com</label></div>
    <div class="tagname"><label>Location: General Santos City</label></div>
    <div class="tagname"><label>Contact: 09217381873</label></div>
  </div>


  <div class="content">
    <div class="picture">
    <button>view profile</button>
      <img src="https://www.lowmanlawfirm.com/hs-fs/hubfs/Lowman_Law_Firm.jpg?width=894&name=Lowman_Law_Firm.jpg" alt="">
    </div>
    <div class="tagname"><label>FirmName: Law Office Gensan</label></div> 
    <div class="tagname"><label>Email: Ann@Gmail.com</label></div>
    <div class="tagname"><label>Location: General Santos City</label></div>
    <div class="tagname"><label>Contact: 09217381873</label></div>
  </div>

  <div class="content">
    <div class="picture">
    <button>view profile</button>
      <img src="https://www.lowmanlawfirm.com/hs-fs/hubfs/Lowman_Law_Firm.jpg?width=894&name=Lowman_Law_Firm.jpg" alt="">
    </div>
    <div class="tagname"><label>FirmName: Law Office Gensan</label></div> 
    <div class="tagname"><label>Email: Ann@Gmail.com</label></div>
    <div class="tagname"><label>Location: General Santos City</label></div>
    <div class="tagname"><label>Contact: 09217381873</label></div>
  </div>

  <!-- end content -->

</div>

























<!-- Property List Start -->
<!-- <div class="container-xxl py-5">
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
                    </div> -->
                    <!-- Add more property items as needed -->
                <!-- </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Property List End -->


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </html>
          