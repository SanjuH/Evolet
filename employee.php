﻿﻿﻿﻿
<html>
<head>

    <link href="emp.css" rel="stylesheet" />
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <link href="Content/font-awesome.min.css" rel="stylesheet" />
    <script src="scripts/jquery-3.3.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <style>
        form {
            top: 100px;
        }

        .nav-align {
            height: 100px;
            background-color: #d4d1d1;
        }

        .nav-design {
            position: relative;
            top: 35px;
            /* margin-left: 129px; */
            left: -70px;
            font-size: 20px;
            /* margin-right: 22px; */
        }

        .li :hover {
            background-color: white !important;
            color: black !important;
            height: 50px !important;
            width: 200px !important;
            text-align: center;
            border-radius: 3px 3px;
        }

        .li :active {
            background-color: white !important;
            color: black !important;
        }

        .li {
            margin-right: 10px;
        }

        .footer {
            background-color: black;
            width: 100%;
            height: 150px;
            color: gray;
        }

        .icons {
            display: inline;
            font-size: 38px;
            left: 635px;
            position: relative;
            top: 20px;
        }

        button:hover {
            color: white !important;
            background-color: black !important;
        }

        .p-align {
            position: relative;
            font-size: 20px;
            top: 15px;
            left: 750px;
        }

        .icons-align {
            margin-right: 10px;
        }

        .p1-align {
            position: relative;
            top: 20px;
            left: -32px;
        }

        .b1 {
            font-size: 25px;
            font-family: serif;
        }

        .color {
            color: gray !important;
        }

        .thead {
            background-color: lightgray;
        }

        body {
            background-image: url(images/background-cement-concrete-242236.jpg);
        }

        table {
            border-collapse: collapse !important;
        }

        table, th, td {
            border: 1px solid slategray !important;
        }
    </style>
</head>
<?php
        session_start();
        if ((!isset($_SESSION['username1']))&&(!isset($_SESSION['username2'])) && (!isset($_SESSION['username3']))){
            header('Location: Emplog.html');
        }
        if (isset($_SESSION['username2'])) {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "evolet";

// Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql1= "SELECT cid from csreg";
            $result = mysqli_query($conn, $sql1);
            $numrows=mysqli_num_rows($result);
            if ($numrows!=0) {
                while ($row =mysqli_fetch_assoc($result)) {
                    $user=$row["cid"];
                    if ($_SESSION['username2']==$user) {
                        header('Location:Counseller.html');
                    }
                }
            }
        }
        if(isset($_SESSION['username3']))
        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "evolet";

// Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql1= "SELECT hid from hrreg";
            $result = mysqli_query($conn, $sql1);
            $numrows=mysqli_num_rows($result);
            if ($numrows!=0) {
                while ($row =mysqli_fetch_assoc($result)) {
                    $user=$row["hid"];
                    if ($_SESSION['username3']==$user) {
                        header('Location:HR.html');
                    }
                }
            }
        }
        mysqli_close($conn);
            ?>
<body style="overflow-x: hidden;background-color: black">
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
                        <img src="images/logo41.png" style="width:300px; height:70px;" />
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
                        <li class="li"><a href="logout.php">LOG OUT <span class="sr-only">(current)</span></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <div>
        <img src="images/art-artist-black-and-white-265047.jpg" style="width:100%;height:1100px;opacity:20" />
        <div class="div1" style="height:850px;">
            <a href="Emp_Profile.php" style="text-decoration:none;">
                    <div class="emp" style="left:100px;top:110px;background-color:slategray !important;">
                    <h2 style="font-family: 'Raleway', sans-serif; position: relative; top: 50px;">My Profile</h2>
                   
        </div>
            </a>
            
            <a href="Eintern.php" style="text-decoration:none;">
                <div class="int" style="left:500px;top:-60px;background-color:slategray !important;">
                    <h2 style="font-family: 'Raleway', sans-serif; position: relative; top: 50px;color:white !important;">Interns</h2>
                    
            </a>
            <a href="Emp_LeaveApply.html" style="text-decoration:none;">
                <div class="int" style="left:410px;top:-70px;background-color:slategray !important;">
                    <h2 style="font-family: 'Raleway', sans-serif; position: relative; top: 50px;color:white !important;">Leave Application</h2>
                    
            </a>
            <a href="strtday.php" style="text-decoration:none;">
                <div class="att" style="left:-410px;top:200px;background-color:slategray !important;">
                    <h2 style="font-family: 'Raleway', sans-serif; position: relative; top: 50px;">Start Your Day?</h2>
                   
                </div>
                </a>
            <a href="break.html" style="text-decoration:none;">
                <div class="att" style="left:0px;top:28px;background-color:slategray !important;">
                    <h2 style="font-family: 'Raleway', sans-serif; position: relative; top: 50px;">Take A Break!</h2>
                    
                </div>
                </a>
            <a href="endday.php" style="text-decoration:none;">
                <div class="att" style="left:-810px;top:-140px;background-color:slategray !important;">
                    <h2 style="font-family: 'Raleway', sans-serif; position: relative; top: 50px;">Finished Your Day?</h2>
                  
                </div>
                </a>
</div>
    </div>
    <div class="footer" style="    position: relative;
    top: 530px;
    left: -150px;">
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