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

<style>
    
    </style>
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

            <div class="user">
                <img src="assets/imgs/customer01.jpg" alt="">
            </div>
        </div>

        <!-- ================= New Clients ================ -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                <h2 class = "fs-2 m-0"> Notice Board </h2>
    </div>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <button type="button" class="btn btn-add mb-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class="fa fa-pen-to-square" style="font-size:20px;float:left;"></i>New Post 
        </button>
      </li>
    </ul> 
  </nav>  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">New Notice</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="date">Date:</label>
              <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
              <label for="content">Content:</label>
              <textarea class="form-control" id="content" name="content" rows="4" cols="50" required></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ================= End New Clients ================ --> 
<!-- =============== Scripts ================ -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
