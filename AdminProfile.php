﻿
<html>

<head>

    <title>Admin Profile</title>
    <style>
       
        form {
            top: 100px;
        }
        .nav-align
{
        height: 100px;
        background-color:#d4d1d1;
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
button:hover
{
    color:white !important;
    background-color:black !important;
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
.b1{
    font-size:25px;
    font-family:serif;
}
.color
{
    color:gray !important;
}
    </style>
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <link href="Content/font-awesome.min.css" rel="stylesheet" />
    <script src="scripts/jquery-3.3.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>

</head>


<body style="overflow-x:hidden;">
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
    $e='EVT001';
   
    $sql1= "SELECT * from adminpro";
    $result = mysqli_query($conn, $sql1);
    $numrows=mysqli_num_rows($result);
    if ($numrows!=0) {
        while ($row =mysqli_fetch_assoc($result)) {
            $e1=$row["aid"];
           
            if($e==$e1) {
                $flag=1;
                echo' <div>';
                echo'   <form name="emp" action="" onsubmit="return validate_form();" method="post">';
                echo'  <table align="center" width="50%" height="100%" cellspacing="2" cellpadding="10" border="5" class="table table-bordered" style="width:850px">';
                echo'   <tr>';
                echo'        <td colspan="2" align="center" id="abc"><b>ADMIN PROFILE.</b></td>';

                echo'      </tr>';
                echo'       <tr>';
                echo'           <td align="left" valign="top" width="41%"> Name<span></span></td>';
     
                echo'         <td width="57%">'.ucfirst($row["aname"]).'</td>';
                echo'     <tr>';
                echo'     <td align="left" valign="top" width="41%">ID<span></span></td>';
                echo'       <td width="57%">' .strtoupper($row["aid"]).'</td>';

                echo'     </tr>';
                echo'    <tr>';
                echo'          <td align="left" valign="top" width="41%">Email<span></span></td>';
                echo'           <td width="57%">' .$row["amail"].'</td>';

                echo'        </tr>';
                echo'       <tr>';
                echo'          <td align="left" valign="top" width="41%">Designation</td>';
                echo'          <td width="57%">'.ucfirst($row["adesig"]).'</td>';
                echo'     </tr>';
                echo'      <tr>';

                echo'        <td align="left" valign="top" width="41%">Contact Number</td>';
                echo'       <td width="57%">' .$row["aphone"].'</td>';

                echo'    </tr>';
                echo'     <tr>';
                echo'          <td align="left" valign="top" width="41%">Address</td>';
                echo'   <td width="60%" >' .ucfirst($row["aaddr"]).'</td>';
                echo'      </tr>';
               
                echo'    <tr>';
                echo'           <td align="left" valign="top" width="41%"> Salary<span></span></td>';
                echo'            <td width="57%">' .ucfirst('Rs.'.$row["asalary"]).'</td>';

                echo'        </tr>';
                echo'       <tr>';
                echo'           <td align="left" valign="top" width="41%"> Gender<span></span></td>';
                echo'           <td width="57%">' .ucfirst($row["agender"]).'</td>';

                echo'      </tr>';
                echo'      <tr>';
                echo'          <td align="left" valign="top" width="41%">Qualification</td>';
                echo'          <td width="57%">' .ucfirst($row["aquali"]).'</td>';
                echo'    </tr>';
               
                echo'      <tr>';
                echo'          <td align="left" valign="top" width="41%">Job Location</td>';
                echo'          <td width="57%">'.ucfirst($row["ajobloc"]).'</td>' ;


                echo'    </tr>';

               
               
               



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