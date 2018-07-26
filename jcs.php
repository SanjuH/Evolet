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
        .couns {
            border: 1px solid gray;
            width: 100%;
            height: 700px;
        }

        body {
            background-color: whitesmoke;
        }

        .nav-align {
            height: 100px;
            background-color: #d4d1d1;
        }

        .headd {
            position: relative;
            top: 145px;
        }

        .heading {
            font-family: serif;
            font-size: 28px;
            text-align: center;
            font-weight: bolder;
            color: black;
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

        .color {
            color: gray !important;
        }

        .div {
            position: relative;
            font-size: 20px;
            color: black;
            font-weight: 600;
            font-family: serif;
            left: 20px;
            top: 20px;
        }

        .btn-align {
            position: relative;
            top: 95px;
            left: 15px;
        }

        .img1-design {
            position: relative;
            top: 100px;
            width: 1685px;
            height: 1500px;
            opacity: 0.7;
            left: 0px;
        }

        #b {
            background-color: black;
            color: white !important;
            font-family: serif;
            font-size: 25px;
        }

        .t1 {
            overflow-x: hidden;
            position: relative;
            top: 235px;
            left: 485px;
        }

        #th {
            height: 55px;
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            font-family: serif;
            background-color: black;
            color: white !important;
        }

        #frm {
            font-size: 19px;
            font-family: sans-serif;
        }

        #upload {
            position: relative;
            left: 320px;
        }

            #upload:hover {
                background-color: white !important;
                color: black !important;
            }

        .view:hover {
            background-color: white !important;
            color: black !important;
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
                            <li class="li"><a href="contactus.html">CONTACT US <span class="sr-only">(current)</span></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <?php
        session_start();
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
     
        $flag=0;
        $flag1=1;
        $sql1= "SELECT * from jobresume";
        $result = mysqli_query($conn, $sql1);
        $numrows=mysqli_num_rows($result);
        if ($numrows!=0) {
            while ($row =mysqli_fetch_assoc($result)) {
                $id=$row["id"];
                $r='Rs.';
                $idt=$_POST['name'];
                if ($id==$idt) {
                    $_SESSION['id2']=$id;
                    echo' <div style="position: relative;top: 100px;left: 45px;">';
                    echo' <form name="emp" action="" onsubmit="" method="post" id="frm">';
                    echo'  <table align="center" width=50% height="100%" cellspacing="2" cellpadding="10" border="5" class="tabel table-bordered" style="width:850px">';
                    echo'       <tr style="height:50px" id="b">';
                    echo'          <td colspan="2" align="center"><b>RESUME.</b></td>';

                    echo'     </tr>';
                    echo'      <tr style="height:45px">';
                    echo'          <td align="left" valign="top" width="41%">&nbsp;&nbsp;Name<span></span></td>';

                    echo'         <td width="57%">'.$row["name"].'</td>';
                    echo'      </tr>';
                    echo'      <tr style="height:45px">';
                    echo'          <td align="left" valign="top" width="41%">&nbsp;&nbsp;Resume ID</td>';
                    echo'      <td width="57%">'.$row["id"].'</td>';
                    echo'      </tr>';
                    echo'      <tr style="height:45px">';
                    echo'          <td align="left" valign="top" width="41%">&nbsp;&nbsp;Email<span></span></td>';

                    echo'           <td width="57%">'.$row["email"].'</td>';
                    echo'        </tr>';
                    echo'   <tr style="height:45px">';
                    echo'        <td align="left" valign="top" width="41%">&nbsp;&nbsp;Phone Number<span></span></td>';

                    echo'         <td width="57%">'.$row["phone"].'</td>';
                    echo'      </tr>';
                    echo' <tr style="height:45px">';
                    echo'   <td align="left" valign="top" width="41%">&nbsp;&nbsp;Gender</td>';
                    echo'   <td width="57%" style="height:45px">'.$row["gen"].'</td>';
                    echo' </tr>';
                    echo'    <tr style="height:45px">';
                    echo'     <td align="left" valign="top" width="41%">&nbsp;&nbsp;Address<span></span></td>';

                    echo'      <td width="57%">'.$row["addr"].'</td>';
                    echo'   </tr>';
                    echo'   <tr style="height:45px">';
                    echo'      <td align="left" valign="top" width="41%">&nbsp;&nbsp;Employement Desired<span></span></td>';

                    echo'    <td width="57%">'.$row["job"].'</td>';
                    echo'   </tr>';
                    echo'  <tr style="height:45px">';
                    echo'     <td align="left" valign="top" width="41%">&nbsp;&nbsp;Desired Pay<span></span></td>';
                    echo'      <td width="57%">'.$r.$row["dpay"].'</td>';

                    echo'    </tr>';

                    // echo'   <tr style="height:45px">';

                    // echo'     <td align="left" valign="top" width="41%">&nbsp;&nbsp;Employement Desired</td>';
                    // echo'    <td width="57%">'.$row["name"].'</td>';

                    // echo'   </tr>';
                    echo'  <tr style="height:45px">';
                    echo'   <td align="left" valign="top" width="41%">&nbsp;&nbsp;Qualification<span></span></td>';
                    echo'    <td width="57%">'.$row["quali"].'</td>';

                    echo'  </tr>';
                    echo' <tr style="height:45px">';
                    echo'   <td align="left" valign="top" width="41%">&nbsp;&nbsp;Work Experience<span></span></td>';
                    echo'   <td width="57%">'.$row["exp"].'</td>';

                    echo'  </tr>';

                    echo' <tr style="height:45px">';
                    echo'   <td align="left" valign="top" width="41%">&nbsp;&nbsp;Skills</td>';
                    echo'   <td width="57%" style="height:45px">'.$row["skills"].'</td>';
                    echo' </tr>';

                    echo' <tr style="height:45px">';
                    echo'    <td colspan="2">';
                    echo'        <p align="center">';
                    echo'            <br />';
                    echo'            <button class="btn btn-lg btn-outline-dark" id="upload" ><a href="sjcs.php">SELECT FOR HIRING</a></button>';
                    echo'             <br />';
                    echo'      </td>';
                    echo'   </tr>';

                    echo'  </table>';
                    echo'  </form>';
                    echo'     </div>';
                    echo'  </div>';
                }
            }
        }
           ?>
        <div class="footer" style="margin-top: 330px;">
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
