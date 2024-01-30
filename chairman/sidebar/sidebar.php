
    <!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../style/sidebar.css">
        <link rel="stylesheet" href="../../style/header.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>


    </head>
    <body>


        <div class="wrapper">
                <script>
                     $(document).ready(function () {
                    $(".notification_icon .fa-bell").click(function () {
                    $(".dropdown").toggleClass("active");
                    });

                    // Close the sidebar when clicking outside the menu
                    $(document).on("click", function (e) {
                    var container = $(".side-bar, .menu-btn");
                    if (!container.is(e.target) && container.has(e.target).length === 0) {
                        $(".side-bar").removeClass('active');
                        $('.menu-btn').css("visibility", "visible");
                    }
                    });

                    // Toggle sub menus
                    $('.sub-btn').click(function () {
                    $(this).next('.sub-menu').slideToggle();
                    $(this).find('.dropdown').toggleClass('rotate');
                    });

                    // Toggle the sidebar
                    $('.menu-btn').click(function () {
                    $('.side-bar').toggleClass('active');
                    $('.menu-btn').css("visibility", "hidden");
                    });

                    $('.close-btn').click(function () {
                    $('.side-bar').removeClass('active');
                    $('.menu-btn').css("visibility", "visible");
                    });
                });
                </script>

                <!--wrapper start-->
            <nav class="navbar">
                <div class="navbar-logo">BARANGAY NBBSP MANAGEMENT SYSTEM</div> 
                <div class="notification_wrap">
                    <div class="notification_icon">
                        <i class="fas fa-bell"></i>
                    </div>
                    <div class="dropdown">
                        <div class="notify_item">
                            <div class="notify_img">
                                <img src="../../img/user.png" alt="profile_pic" style="width: 50px">
                            </div>
                            <div class="notify_info">
                                <p>Alex commented on<span>Timeline Share</span></p>
                                <span class="notify_time">10 minutes ago</span>
                            </div>
                        </div>
                        <div class="notify_item">
                            <div class="notify_img">
                                <img src="../../img/user.png" alt="profile_pic" style="width: 50px">
                            </div>
                            <div class="notify_info">
                                <p>Ben hur commented on your<span>Timeline Share</span></p>
                                <img src="../../img/user.png" alt="profile_pic" style="width: 50px">
                            </div>
                        </div>
                        <div class="notify_item">
                            <div class="notify_img">
                                <img src="../../img/user.png" alt="profile_pic" style="width: 50px">
                            </div>
                            <div class="notify_info">
                                <p>Meryn trant liked your<span>Cover Picture</span></p>
                                <span class="notify_time">2 hours ago</span>
                            </div>
                        </div>
                        <div class="notify_item">
                            <div class="notify_img">
                                <img src="../../img/user.png" alt="profile_pic" style="width: 50px">
                            </div>
                            <div class="notify_info">
                                <p>John wick commented on your<span>Profile Picture</span></p>
                                <span class="notify_time">6 hours ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-dropdown">
                    <div class="profile-dropdown-btn" onclick="toggle()">
                        <div class="profile-img">
                            <i class="fas fa-circle"></i>
                        </div>
                            <span> 
                                victoria
                                <i class="fas fa-angle-down"></i>
                            </span>
                    </div>
                    
                    <ul class="profile-dropdown-list">
                        <li class="profile-dropdown-list-item">
                            <a href="../Profile/profilepage.html">
                                <i class="fas fa-user"></i>
                                Edit Profile
                            </a>
                        </li>
                        <hr />
                        <li class="profile-dropdown-list-item">
                            <a href="../../Profile/logout.php">
                                <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
                <script src="../../js/script.js"></script>
      
            <!--header menu end-->
            <!--sidebar start-->
            <div class="side-bar">
                <header>
                <img src="../../img/logo.jpg" alt="">
                   
                   </header>
                    <div class="menu">
                    <div class="item ">
                    <a class="sub-btn" href="../dashboard/dashbord.php"><i class="fas fa-desktop"></i><span>Dashboard</span>      
                     </a></div>
                     <div class="item ">                        
                        <a class="sub-btn"><i class="fas fa-clipboard-list"></i><span>Reports</span><i class="fas fa-angle-right dropdown"></i></a>
                           <div class="sub-menu">
                             <a href="../Reports/secrep.php"><i class="fas fa-file-alt"></i><span>Secretary Report</span></a>
                             <a href="../Reports/tresrep.php"><i class="fas fa-list-ul"></i><span>Treasurer Reports</span></a>
                          </div>   
                          </div>
                   


                     <div class="item ">                        
                     <a class="sub-btn"><i class="fas fa-tools"></i><span>Setting</span><i class="fas fa-angle-right dropdown"></i></a>
                        <div class="sub-menu">
                          <a href="../Setting/brgyinfo.php"><i class="fas fa-list-alt"></i><span>Barangay Information</span></a>
                          <a href="../Setting/brgyinfolist.php"><i class="fas fa-list-alt"></i><span>Barangay Info List</span></a>
                          <a href="../Setting/listofuser.php"><i class="fas fa-users"></i><span>List of User</span></a>
                          <a href="../Setting/listofstap.php"><i class="fab fa-black-tie"></i><span>List of Staff</span></a>
                          <a href="../Setting/lupon.php"><i class="fas fa-balance-scale-right"></i><span>Lupon Member List</span></a>
                        </div>   
                       </div>
                       <div class="item ">
                        <a  class="sub-btn" href="../aboutus/AboutUs.php"><i class="fas fa-info-circle"></i></i><Span>About Us</Span></a></div>

                   </div>
                 </div>
           
           

            </div>
        </div>



 

</body>
</html>