
<html>
<head>

    <link href="admin_style.css" rel="stylesheet" />
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <link href="Content/font-awesome.min.css" rel="stylesheet" />
    <script src="scripts/jquery-3.3.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
</head>
<?php
        session_start();
        if (!isset($_SESSION['username'])) {
            header('Location: Adminlog.html');
        }
            ?>
				
<body style="overflow-x:hidden;height:900px">
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
                        <img src="images/logo41.png" style="height:70px;width:300px"/>
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
        <img src="images/wall-175686__480.jpg" style="width:100%;height:900px" />
        <div style="position:relative;left:200px;font-family:sans-serif;top:70px">
            <div class="emp" style="position:relative;left:-140px">
                <h2>Employee Details</h2>
                <button id="btn" onclick="location.href='Employee_Details.html'">Manage Employee</button>
            </div>
            <div class="int" style="position:relative;left:260px">
                <h2>Intern Details</h2>
                <button id="btn" onclick="location.href='Intern_Details.html'">Manage Interns</button>
            </div>
            <div class="att" style="position:relative;left:660px;top:-160px">
                <h2>Attendance Details</h2>
                <button id="btn" onclick="location.href='Attendance_Details.html'">View</button>
            </div>
            <div class="pro" style="position:relative;left:1060px;top:-330px">
                <h2>My Profile</h2>
                <button id="btn" onclick="location.href='AdminProfile.php'">View</button>
            </div>
            <div class="emp" style="position:relative;top:-300px;left:260px">
                <h2>Create Account For HR</h2>
                <button id="btn" onclick="location.href='hrreg.html'">Create</button>
            </div>
            <div class="emp" style="position:relative;top:-470px;left:660px">
                <h2>Create Account For Counseller</h2>
                <button id="btn" onclick="location.href='counselreg.html'">Create</button>
            </div>
        </div>
    </div>
   

    <div class="footer" style="position:relative;top:-100px">
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