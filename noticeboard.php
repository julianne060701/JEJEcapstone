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

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

  
                <!-- ================= New Clients ================ -->
                <div id = "page-content-wrapper">
            <nav class = "navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class = "d-flex align-items-center"> 
                    <h2 class = "fs-2 m-0"> Notice Board </h2>
                </div>

                    </ul> 

                </div>
            </nav>  

                  <!-- Button trigger modal -->
          <button type="button" class="btn btn-add mb-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <i class="fa fa-pen-to-square" style="font-size:20px;float:left;" ></i>New Post 
          </button>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    
  
  <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <form>
            <div class ="label">   
            <label for="fname">Name:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <input type="text" id="name" name="name"><br><br>
            </div>

            <div class="label">
            <label for="Date">Date:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <input type="date" id="date" name="date">
            </div>
  
            <div class ="label"> 
            <label for="ftitle">Title:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <input type="text" id="titile" name="title"><br><br>
            </div>

            <div class="label">
            <label for="lname">Content:</label>
            <textarea id="content" name="content" rows="4" cols="50"></textarea>
            </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" name="notice-db">Post</button>
      </div>


     <!-- <div class="modal-footer">
        <form method="POST" class="btn btn-secondary" data-bs-dismiss="modal" action="noticeBoard.php"> </form>
      </div> -->
    </div>
  </div>
</div>
 



        <script>
            function openForm() {
                document.getElementById("modal").style.display = "block";
            }

            function closeForm(){
                document.getElementById("modal").style.display = "none";
            }
        </script>
                    
            <style>
                .col{
                    padding: 20px;
                    display: flex;
                    column-gap: 10px;
                    row-gap: 10px;
                    flex-wrap: wrap;
                }
                .cont{
                    background: #ddd;
                    padding: 20px;
                    width: 300px;
                    height: 200px;
                    border-radius: 10px;
                    box-shadow: 1px 1px 3px 0px black;
                }
                .cont2{
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                }
            </style>
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>