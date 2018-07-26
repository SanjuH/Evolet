
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
                        <li class="li"><a href="employee.html">EMPLOYEE <span class="sr-only">(current)</span></a></li>
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
    //$e=$_POST['search'];
    $e=$_POST['search'];
    $sql1= "SELECT * from intern";
    $result = mysqli_query($conn, $sql1);
    $numrows=mysqli_num_rows($result);
    if ($numrows!=0) {
        while ($row =mysqli_fetch_assoc($result)) {
            $e1=$row["iid"];
            $e2=$row["iname"];
            if (($e==$e1)||($e==$e2)) {
                $flag=1;
                $_SESSION['varname'] = $e1;
                echo' <div>';
                echo'   <form name="emp" action="i5.php " onsubmit="return validate_form();" method="post">';
                echo'  <table align="center" width="70%" height="100%" cellspacing="2" cellpadding="10" border="5" class="table table-bordered" style="width:850px">';
                echo'   <tr>';
                echo'        <td colspan="3" align="center" id="abc"><b>INTERN PROFILE.</b></td>';

                echo'      </tr>';
                echo'       <tr>';
                echo'           <td align="left" valign="top" width="41%"><b>Field Name</b><span></span></td>';
                echo'           <td align="left" valign="top" width="41%"><b>Current Data</b><span></span></td>';
                echo'           <td align="left" valign="top" width="41%"><b>Enter New Data</b><span></span></td>';
                echo' </tr>';
                echo'       <tr>';
                echo'           <td align="left" valign="top" width="41%">Intern Name<span></span></td>';
                
                echo'         <td width="57%">'.ucfirst($row["iname"]).'</td>';
                echo'       <td width="57%"><input type="text" placeholder="'.ucfirst($row["iname"]).'" size=30 name="m1" required></td>';
                echo'     <tr>';
                echo'     <td align="left" valign="top" width="41%">Employee Number<span></span></td>';
                echo'       <td width="57%">' .strtoupper($row["eid"]).'</td>';
                echo'       <td width="57%"><input type="text" size=30 placeholder="'.$row["eid"].'" name="m12" required></td>';
              //  echo'       <input type="hidden" name="eid1" value="'.$e1.'">';
                  
                echo'     </tr>';
                echo'     <tr>';
                echo'     <td align="left" valign="top" width="41%">Intern Number<span></span></td>';
                echo'       <td width="57%">' .strtoupper($row["iid"]).'</td>';
                echo'       <td width="57%">' .strtoupper($row["iid"]).'</td>';
              //  echo'       <input type="hidden" name="eid1" value="'.$e1.'">';
                  
                echo'     </tr>';
                echo'    <tr>';
                echo'          <td align="left" valign="top" width="41%">Email<span></span></td>';
                echo'           <td width="57%">' .$row["iemail"].'</td>';
                echo'       <td width="57%"><input type="email" size=30 placeholder="'.$row["iemail"].'" name="m11" required></td>';

                echo'        </tr>';
                echo'      <tr>';
             
                echo'        <td align="left" valign="top" width="41%">Contact Number</td>';
                echo'       <td width="57%">' .$row["iphone"].'</td>';
                echo'       <td width="57%"><input type="number" onkeypress="return isNumberKey(event); size=30 placeholder="'.$row["iphone"].'" name="m3" required></td>';
                echo'    </tr>';
                echo'     <tr>';
                echo'          <td align="left" valign="top" width="41%">Address</td>';
                echo'   <td width="60%" >' .ucfirst($row["iaddr"]).'</td>';
                echo'       <td width="57%"><input type="text" size=30 placeholder="'.ucfirst($row["iaddr"]).'" name="m2" required></td>';
                echo'      </tr>';
                
                echo'    <tr>';
                echo'           <td align="left" valign="top" width="41%">Intern Stipend <span></span></td>';
                echo'            <td width="57%">' .ucfirst('Rs.'.$row["isalary"]).'</td>';
                echo'       <td width="57%"><input type="number" size=30 placeholder="'.ucfirst('Rs.'.$row["isalary"]).'" name="m4" required></td>';
                echo'        </tr>';
                echo'       <tr>';
                echo'           <td align="left" valign="top" width="41%">Intern Gender<span></span></td>';
                echo'           <td width="57%">' .ucfirst($row["igender"]).'</td>';
                echo'       <td width="57%"><input type="text" size=30 placeholder="'.ucfirst($row["igender"]).'" name="m5" required></td>';
                echo'      </tr>';
                echo'      <tr>';
                echo'          <td align="left" valign="top" width="41%">Qualification</td>';
                echo'          <td width="57%">' .ucfirst($row["iquali"]).'</td>';
                echo'       <td width="57%"><input type="text" size=30 placeholder="'.ucfirst($row["iquali"]).'" name="m6" required></td>';
                echo'    </tr>';
                echo'   <tr>';
                echo'        <td align="left" valign="top" width="41%">Skills</td>';
                echo'         <td width="57%" >' .ucfirst($row["iskills"]).'</td>';
                echo'       <td width="57%"><input type="text" size=30 placeholder="' .ucfirst($row["iskills"]).'" name="m7" required></td>';
                echo'      </tr>';
                echo'      <tr>';
                echo'          <td align="left" valign="top" width="41%">Internship Location</td>';
                echo'          <td width="57%">'.ucfirst($row["iloc"]).'</td>' ;
                echo'       <td width="57%"><input type="text" size=30 placeholder="'.ucfirst($row["iloc"]).'" name="m8" required></td>';

                echo'    </tr>';

                echo'       <tr>';
                echo'          <td align="left" valign="top" width="41%">Designation</td>';
                echo'          <td width="57%">'.ucfirst($row["idesig"]).'</td>';
                echo'       <td width="57%"><input type="text" size=30 placeholder="'.ucfirst($row["idesig"]).'" name="m9" required></td>';
                echo'     </tr>';
                echo'     <tr>';
                echo'         <td align="left" valign="top" width="41%">Domain</td>';
                echo'          <td width="57%">'.ucfirst($row["idomain"]).'</td>';
                echo'       <td width="57%"><input type="text" size=30 placeholder="'.ucfirst($row["idomain"]).'" name="m10" required></td>';
                echo'       </tr>';
                echo'     <tr>';
                echo'         <td align="left" valign="top" width="41%">Project</td>';
                echo'          <td width="57%">'.ucfirst($row["project"]).'</td>';
                echo'       <td width="57%"><input type="text" size=30 placeholder="'.ucfirst($row["idomain"]).'" name="m13" required></td>';
                echo'       </tr>';
                
                echo'<tr>';
                echo'<td colspan="3">';
                   echo' <p align="center">';
                echo'<button class="btn btn-lg btn-outline-dark">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                echo'        </td>';
                echo'        </tr>';
                echo'     </table>';
                echo'   </form>';
                echo'   </div>';
            }
        }
        
        if($flag!=1)
        {
            echo '<h1>Employee Record Not Found</h1>';
        }
    }
    
  
    ?>
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
</body>

</html>