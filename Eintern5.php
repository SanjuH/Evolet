
<html>

    <head>
    <?php
     session_start();
     ?>
        <title>Registration Form</title>
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
    
            #abc {
                font-family: serif;
                font-size: 25px;
                background-color: lightgray;
            }
            .heading
    {
            position: relative;
        top: 20px;
        font-family: serif;
        text-align: center;
        font-size: 28px;
        font-weight: 700;
    }
            #def
            {
                 width: 550px;
                  height: 55px;
                 border-radius: 5px 5px;
                 position: relative;
                top: 2px;
                left: 525px;
            }
            #lmn{
                position: relative;
                    top: -2px;
                    left: 517px;
                    width: 100px;
                     height: 56px;
            }
        </style>  <style>
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
               .thead
               {
                   background-color:lightgray;
               }

               body
               {

                    background-image:url(images/background-cement-concrete-242236.jpg);


               }
               table {
                   border-collapse: collapse !important;
                  
                }

               table, th, td {
                   border: 1px solid slategray !important;

                  }
    </style>
        <link href="Content/bootstrap.min.css" rel="stylesheet" />
        <link href="Content/font-awesome.min.css" rel="stylesheet" />
        <script src="scripts/jquery-3.3.1.min.js"></script>
        <script src="scripts/bootstrap.min.js"></script>
    
    </head>
    
    
    <body style="overflow-x:hidden">
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
                            <li class="li"><a href="employee.php">EMPLOYEE <span class="sr-only">(current)</span></a></li>
                            <li class="li"><a href="About.html">ABOUT US <span class="sr-only">(current)</span></a></li>
                            <li class="li"><a href="contactus.html">CONTACT US <span class="sr-only">(current)</span></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
    
        
        <?php
        
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
        $did="-";
        $id=$_POST['name'];
        $d=$_POST['name1'];
        $dq=$_POST['name2'];

        $sql1= "SELECT * from itask where iid='$id' and date='$d' and eid='$dq'";
        $result = mysqli_query($conn, $sql1);
        $numrows=mysqli_num_rows($result);
        if ($numrows!=0) {
            echo' <table class="table table-striped">';
                   echo'<thead>';
                   echo' <tr>';
                   echo' <th scope="col">#</th>';
                   echo'  <th scope="col">Intern Name</th>';
                   echo'  <th scope="col">Employee Name</th>';
                   echo'  <th scope="col">Date </th>';
                   echo'  <th scope="col">Time Alloted</th>';
                   echo'  <th scope="col">Task Given</th>';
                   echo'  <th scope="col">Task Status</th>';
                   echo' </tr>';
                   echo'</thead>';
            while ($row =mysqli_fetch_assoc($result)) {
                $e1=$row["iid"];
               
                
                
                if ($e1 == $id) {
                  
                        $flag=1;
                        $ts=$row["sts"];
                        if ($ts=="1") {
                            $sts="Done";
                        } else {
                            $sts="Due";
                        }
                        echo'<tbody>';
                        echo'  <tr>';
                        echo'   <th scope="row">'.$flag1.'</th>';
                        echo'   <td>'.$row["iname"].'</td>';
                        echo'   <td>'.$row["eid"].'</td>';
                        echo'   <td>'.$row["date"].'</td>';
                        echo'   <td>'.$row["time"].' Hrs'.'</td>';
                        echo'   <td>'.$row["task"].' Hrs'.'</td>';
                        echo'   <td>'.$sts.'</td>';
                       
                       
                        echo' </tr>';
                       
                        echo' </tbody>';
                        $flag1=$flag1+1;
                      
                    }

                }
            
            echo'</table>';
          
        }
        if($flag!=1)
        {
            echo '<h1>This Intern Has Not Been Allocated Any Work</h1>';
        }
        ?>
        <div class="footer" style="position:relative;top:500px;">
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