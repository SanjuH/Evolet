﻿
<html>
<head>

    <link href="admin_style.css" rel="stylesheet" />
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <link href="Content/font-awesome.min.css" rel="stylesheet" />
    <script src="scripts/jquery-3.3.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<?php
        session_start();
        if (!isset($_SESSION['username'])) {
            header('Location: Adminlog.html');
        }
            ?>

<body style="overflow-x:hidden;height:100%">
    <div>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid nav-align">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://www.evolettechnologies.com">
                        <img src="images/logo41.png" style="height:70px;width:300px" />
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-design" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="li"><a href="Template.html">HOME <span class="sr-only">(current)</span></a></li>&nbsp;&nbsp;
                        <li class="li"><a href="Domain.html">DOMAIN <span class="sr-only">(current)</span></a></li>
                        <li class="li"><a href="Admin.php">ADMIN <span class="sr-only">(current)</span></a></li>
                        <li class="li"><a href="employee.php">EMPLOYEE <span class="sr-only">(current)</span></a></li>
                        <li class="li"><a href="About.html">ABOUT US <span class="sr-only">(current)</span></a></li>
                        <li class="li"><a href="logout.php">LOG OUT<span class="sr-only">(current)</span></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <div>
    
       
        
        <img src="images/art-artist-black-and-white-265047.jpg" style="width:100%;height:1100px;opacity:20" />
        <div style="position:relative;left:200px;font-family:sans-serif;top:70px;height:1200px;">

            

            <a href="Employee_Details.html" style="text-decoration:none; box-shadow:lightgray 10px 10px inset;" class="hv">
                <div class="emp" style="position:relative;left:460px;background-color:slategray !important;">
                    <h2 style="font-family: 'Raleway', sans-serif; position: relative; top: 50px;">Employee Details</h2>
                    
                </div>
            </a>

            <a href="Intern_Details.html" style="text-decoration:none">
                <div class="int" style="position:relative;left:860px;background-color:slategray; !important;">
                    <h2 style="font-family: 'Raleway', sans-serif; position: relative; top: 50px;">Intern Details</h2>

                </div>
            </a>
            <a href="Attendance_Details.html" style="text-decoration:none">
                <div class="att" style="position:relative;left:460px;top:221px;background-color:slategray !important;">
                    <h2 style="font-family: 'Raleway', sans-serif; position: relative; top: 50px;">Attendance Details</h2>

                </div>
            </a>
            <a href="employee.php" style="text-decoration:none">
                <div class="emp" style="position:relative;top:-139px;left:860px;background-color:slategray !important;">
                    <h2 style="font-family: 'Raleway', sans-serif; position: relative; top: 50px;">Create Account For HR</h2>

                </div>
            </a>
            <a href="employee.php" style="text-decoration:none">
                <div class="emp" style="position:relative;top:-310px;left:460px;background-color:slategray !important;">
                    <h2 style="font-family: 'Raleway', sans-serif; position: relative; top: 40px;">Create Account For Counsellor</h2>

                </div>
            </a>
            <a href="vbreak.php" style="text-decoration:none">
                <div class="emp" style="position:relative;top:-290px;left:860px;background-color:slategray !important;">
                    <h2 style="font-family: 'Raleway', sans-serif; position: relative; top: 50px;">View Break Requests</h2>

                </div>
            </a>
           
                <div style="height: 530px;    height: 530px;  position: relative; top: -840px; left: 40px;background-color:slategray !important;" class="emp">
                    <h2 style="position: relative;top: 70px;font-family: 'Raleway', sans-serif;">My Profile</h2>
                    <span class="dot"></span>
                    <i><span class="fa fa-user-circle" style="font-size: 160px;position: relative;top: 90px;left: 92px;"></span></i>
                    <a href="AdminProfile.php" style="color:black !important;"><button class="btn btn-lg " style="position: relative; top: 210px; left: -55px; height: 65px; width: 135px;">VIEW</button></a> 
                </div>
            </a>
</div>
    </div>


    <div class="footer" style="position:relative;top:-80px">
        <div>
            <p class="p-align">Follow Us On</p>
            <div>
                <ul class="icons">
                    <a href="https://twitter.com/evoletblr" class="color"><i class="fa fa-twitter-square icons-align"></i></a>
                    <a href="https://www.facebook.com/Evolet-Technologies-1988856154659946/" class="color"><i class="fa fa-facebook-square icons-align"></i></a>
                    <a href="#" class="color"><i class="fa fa-skype icons-align"></i></a>
                    <a href="https://www.youtube.com/channel/UCUD_joTvV9Q422yToKB7lCA" class="color"><i class="fa fa-youtube-square icons-align"></i></a>
                    <a href="https://linkedin.com/company/evolettechnologies" class="color"><i class="fa fa-linkedin-square icons-align"></i></a>
                    <a href="https://plus.google.com/u/1/collection/g1v1WE" class="color"><i class="fa fa-google-plus-square icons-align"></i></a>

                </ul>
            </div>
            <p class="text-center cpy-text p1-align">&copy; 2017 - Privacy Policy</p>
        </div>
    </div>
</body>
</html>