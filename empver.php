<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>  <style>
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
</head>
<body>
    
</body>
</html>
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
$e=$_POST['email'];
$p=$_POST['pwd'];
$sql1= "SELECT empid,empemail,empass from empreg";
$result = mysqli_query($conn, $sql1);
$numrows=mysqli_num_rows($result);
    if ($numrows!=0) {
        while ($row =mysqli_fetch_assoc($result)) {
            $e1=$row["empemail"];
            $p1=$row["empass"];
            $user=$row["empid"];

            if ($e == $e1 && $p == $p1) {
                $flag=1;
                session_start();
	$_SESSION['sess_user']=$user;
	$_SESSION['username1']=$user;
                header('Location: employee.php');
            } 
         
        
            
               
            
        }

        
    }
    $sql2= "SELECT cid,cemail,cpwd from csreg";
$result1 = mysqli_query($conn, $sql2);
$numrows=mysqli_num_rows($result1);
    if ($numrows!=0) {
        while ($row =mysqli_fetch_assoc($result1)) {
            $e1=$row["cemail"];
            $p1=$row["cpwd"];
            $user=$row["cid"];

            if ($e == $e1 && $p == $p1) {
                $flag=1;
                session_start();
                $_SESSION['sess_user']=$user;
                $_SESSION['username2']=$user;
                header('Location: Counseller.html');
            }
        }
    }
    $sql3= "SELECT hid,hemail,hpwd from hrreg";
$result2 = mysqli_query($conn, $sql3);
$numrows=mysqli_num_rows($result2);
    if ($numrows!=0) {
        while ($row =mysqli_fetch_assoc($result2)) {
            $e1=$row["hemail"];
            $p1=$row["hpwd"];
            $user=$row["hid"];

            if ($e == $e1 && $p == $p1) {
                $flag=1;
                session_start();
                $_SESSION['sess_user']=$user;
                $_SESSION['username3']=$user;
                header('Location: HR.html');
            }
        }
    }
    if($flag==0){
        echo'<div style="text-align:center ;font-size:40px;top:30%;position:absolute;left:25%">';
        echo "Invalid Credentials";
        echo '</div>';
        header("Refresh: 2; url=Emplog.html");
    }
mysqli_close($conn);
?>
