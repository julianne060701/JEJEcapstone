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


<!-- The modal -->
<div id="registerModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Register Office</h2>
    <form>
      <label for="firmName">Firm Name:</label>
      <input type="text" id="firmName" name="firmName" required>
      
      <label for="address">Address:</label>
      <textarea id="address" name="address" required></textarea>
      
      <label for="contactNumber">Contact Number:</label>
      <input type="tel" id="contactNumber" name="contactNumber" required>
      
      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email" required>
      
      <button type="submit">Submit</button>
    </form>
  </div>
</div>


    <!-- <div class="regis-Office">
        <h2 >Register Office</h2>
        <form action="#" class="register-Office">
            
            <div class="reg-office">
                
                <label>Firm Name</label>
                <input type="text" required>
                <label>Address</label>
                <input type="text" required>

                <label>Contact</label>
                <input type="text" required>
                <label>Email Address</label>
                <input type="text" required>
            </div>
            
        </form>
    </div> -->

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
                    <a href="AdminDashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="Law Office.php">
                        <span class="icon">
                            <ion-icon name="business-outline"></ion-icon>
                        </span>
                        <span class="title">Law Office</span>
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
                        <span class="title">Client List</span>
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
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="#">
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

            <!-- ======================= Cards ================== -->
            

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="Appointment">
                    <div class="cardHeader">
                        <h2>Law Offices</h2>
                        <button id="registerBtn" class="btn">Register</button>
                    </div>
                    
                    <table>
                        <thead>
                            <tr>
                                <td>Firm Name</td>
                                <td>Address</td>
                                <td>Contact</td>
                                <td>Email Address</td>
                                <td>Action</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Jv Laroco Firm</td>
                                <td>Brgy. Apopong</td>
                                <td>09485344156</td>
                                <td>jvlaroco@gmail.com</td>
                                <td><button class="method active">Accept</button><strong> / </strong>
                                    <button class="method deactive">Decline</button></td>
                                <td><span class="status delivered">Activated</span></td>
                            </tr>

                            <tr>
                                <td>Neil Mark Luspo Firm</td>
                                <td>Brgy. Bula</td>
                                <td>09485344156</td>
                                <td>Neil@gmail.com</td>
                                <td><button class="method active">Accept</button><strong> / </strong>
                                    <button class="method deactive">Decline</button></td>
                                <td><span class="status return">Deactivated</span></td>
                            </tr>

                            <tr>
                                <td>Esabel Luspo Firm</td>
                                <td>Brgy. Mabuhay</td>
                                <td>09485344156</td>
                                <td>Esabel@gmail.com</td>
                                <td><button class="method active">Accept</button><strong> / </strong>
                                    <button class="method deactive">Decline</button></td>
                                <td><span class="status delivered">Activated</span></td>
                            </tr>

                            <tr>
                                <td>Khytryn Carcillar Firm</td>
                                <td>Gensan</td>
                                <td>09485344156</td>
                                <td>jvlaroco@gmail.com</td>
                                <td>
                                    <button class="method active">Accept</button><strong> / </strong>
                                    <button class="method deactive">Decline</button>
                                </td>
                                <td><span class="status return">Deactivated</span></td>
                            </tr>

                            <tr>
                                <td>Khytryn Carcillar Firm</td>
                                <td>Gensan</td>
                                <td>09485344156</td>
                                <td>Khytryn@gmail.com</td>
                                <td><button class="method active">Accept</button><strong> / </strong>
                                    <button class="method deactive">Decline</button></td>
                                <td><span class="status delivered">Activated</span></td>
                            </tr>

                            <tr>
                                <td>Ryan Burdo Firm</td>
                                <td> Brg. Conil</td>
                                <td>09485344156</td>
                                <td>Ryan@gmail.com</td>
                                <td><button class="method active">Accept</button><strong> / </strong>
                                    <button class="method deactive">Decline</button></td>
                                <td><span class="status delivered">Activated</span></td>
                            </tr>

                            <tr>
                                <td>Jv Laroco Firm</td>
                                <td> Brg. Conil</td>
                                <td>09485344156</td>
                                <td>Ryan@gmail.com</td>
                                <td><button class="method active">Accept</button><strong> / </strong>
                                    <button class="method deactive">Decline</button></td>
                                <td><span class="status delivered">Activated</span></td>
                            </tr>

                            <tr>
                                <td>Julie Ann Fernandez Firm</td>
                                <td>Gensan</td>
                                <td>09485344156</td>
                                <td>Julie@gmail.com</td>
                                <td><button class="method active">Accept</button><strong> / </strong>
                                    <button class="method deactive">Decline</button></td>
                                <td><span class="status return">Deactivated</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            
            </div>
        </div>
    </div>
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>