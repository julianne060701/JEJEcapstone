<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="Dashboard.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
    <style>
            <?php
                include "noticeboard.css"
            ?>
        </style>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                </span>

                <div class="text logo-text">
                    <span class="name">Law Office</span>
                    <span class="profession">General Santos City</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">


                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="Dashboard.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="lawyerOffice.php">
                            <i class='bx bx-buildings icon' ></i>
                            <span class="text nav-text">Law Office</span>
                        </a>
                    </li>


                    <li class="nav-link">
                        <a href="lawyerlist.php">
                            <i class='bx bx-user icon' ></i>
                            <span class="text nav-text">Lawyer</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="noticeboard.php">
                            <i class='bx bx-list-plus icon' ></i>
                            <span class="text nav-text">Client List</span>
                        </a>
                    </li>


                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notice Board</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="Admin.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

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
          
                            
                    
                        
                        <!-- <button class="btn-success" id="myText" onclick="myFunction()">Active</button>
                        <script>
                        
                      
                        function myFunction() {
                        document.getElementById("myText").Name = "Inactive";    
                        
                        


            </div>


                </div>   
                      
        </div>
        
    </div>
        
    <div class="overlay" id = "popup-msg">
        <div class="popup" id = "popup">
            <p>Are you sure you want to log out?</p>
            <div class="text-right">
                <button class="btn btn-cancel" onclick="closeForm()">Cancel</button>
                <button class="btn btn-primary" onclick="location.href='index.php'">Yes</button>
            </div>
        </div>
    </div>

<script>
    function openForm() {
    document.getElementById("popup-msg").style.display = "block";
    document.getElementById("popup").style.display = "block";
    }

    function closeForm() {
        document.getElementById("popup-msg").style.display = "none";
        document.getElementById("popup").style.display = "none";
    }
</script>-->
    </body>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>

</body>
</html>
