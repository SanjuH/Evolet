<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <link href="Content/font-awesome.min.css" rel="stylesheet" />
    <script src="scripts/jquery-3.3.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <style>
        .couns
        {

            border: 1px solid gray;
            width:100%;
            height:700px;
        }
                .nav-align
        {
                height: 100px;
                background-color:#d4d1d1;
        }
        .headd
        {
                position: relative;
                 top: -450px;
        }
        .heading
        {
                    font-family: serif;
                    font-size: 28px;
                    text-align: center;
                    font-weight: bolder;
                    color: black;
        }
        .nav-design
        {
            position: relative;
            top: 35px;
            /* margin-left: 129px; */
            left: -70px;
            font-size: 20px;
            /* margin-right: 22px; */
        }
        .li :hover{
            background-color:white !important;
            color:black !important;
            height:50px !important;
            width:200px !important;
            text-align:center;
            border-radius:3px 3px;
        }
        .li :active
        {
            background-color:white !important;
            color:black !important;
        }
        .li
        {
            margin-right:10px;
        }
        .footer
        {
               background-color: black;
            width: 100%;
            height: 150px;
            color:gray;

        }

        .icons {
            display: inline;
            font-size: 38px;
            left: 635px;
            position: relative;
            top: 20px;

        }
        .p-align
        {
                position: relative;
            font-size: 20px;
            top: 15px;
            left: 750px;
        }
        .icons-align
        {
            margin-right:10px;
        }
        .p1-align
        {
                position: relative;
            top: 20px;
            left: -32px;
        }
        .color
        {
            color:gray !important;
        }
        .anim {
            height: 300px;
            width: 900px;
            border-radius: 4px 4px;

            border: 1px solid black;
            opacity: 0.6;
            filter: alpha(opacity=60);
            animation-duration: 1s;
            animation-name: slidein;
            position: absolute;
            top: 100px;
            left: 410px;
        }
         @keyframes slidein {
                from {
                    margin-left: 100%;
                    width: 600px;
                }

                to {
                    margin-left: 100%;
                    width: 600px;
                }
            }
         .div
         {
             position: relative;

            font-size: 20px;
            color: black;
            font-weight: 600;
            font-family: serif;
            left: 20px;
            top: 20px;

         }
         .btn-align
         {
               position: relative;
                top: 95px;
                left: 15px;
         }
         .img1-design
         {
             width: 1685px;
            position: relative;
            top: 100px;
            height: 597px;
            opacity: 0.7;
         }
         .button-design
         {
                 background-color: black;
                color: white;
                height: 70px;
                width: 220px;
                font-size: 25px;
                font-family: sans-serif;
                left:30px;
                position:relative;
         }
         .button-design:hover
         {
             background-color:white !important;
             color:black !important;
         }
    </style>
</head>
<body style="overflow-x:hidden;">
    <div class="img-align">
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
                            <img src="images/logo41.png" />
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-design" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="li"><a href="Template.html">HOME <span class="sr-only">(current)</span></a></li>&nbsp;&nbsp;
                            <li class="li"><a href="Domain.html">DOMAIN <span class="sr-only">(current)</span></a></li>
                            <li class="li"><a href="Admin.php">ADMIN <span class="sr-only">(current)</span></a></li>
                            <li class="li"><a href="Counseller.html">EMPLOYEE <span class="sr-only">(current)</span></a></li>
                            <li class="li"><a href="About.html">ABOUT US <span class="sr-only">(current)</span></a></li>
                            <li class="li"><a href="logout.php">LOG OUT <span class="sr-only">(current)</span></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <div class="couns">
            <img src="images/business-plan-charts-graphs-590016.jpg" class="img1-design" />
            <div class="headd">
                <p class="heading">RESUME</p>
                <div class="anim">
                    <p class="heading">Upload And Download Resume Here : </p>

                    <div class="btn-align">
   

                        <button class="btn btn-lg btn-outline-dark button-design" id="abc">Upload Resume</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button class="btn btn-lg btn-outline-dark button-design" id="def" style="width:40%">Download Resume Format</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <!-- <button class="btn btn-lg btn-outline-dark button-design" id="lmn">Resume</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
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
    </div>
</body>
</html>
<script>
    document.getElementById('abc').onclick = function () {
        location.href = 'fil.html';
    };
    document.getElementById('def').onclick = function () {
        location.href = 'down.php';
    };
    
    
</script>
