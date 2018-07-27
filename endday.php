<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    body img{
    position: absolute;
    width: 100%;
    height: 100%;
        opacity: 0.8;
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
</head>

<body>
    
</body>
</html>
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
    date_default_timezone_set("Asia/Calcutta");
    $sql1= "SELECT * from employee";
    $d=date("Y-m-d ");
    $t=date("h:i:sa");
    $result = mysqli_query($conn, $sql1);
    $numrows=mysqli_num_rows($result);
    if ($numrows!=0) {
        while ($row =mysqli_fetch_assoc($result)) {
            $e=$row["eid"];
            if ($e==$_SESSION["username1"]) {
                $flag=1;
                $en=$row["ename"];
                // $sql="SELECT sdate FROM attendance WHERE sdate=$d";
                // if (mysqli_query($conn, $sql)) {
                //     $sd=$row["sdate"];
                //     if($sd==$d)
                //     {
                $sql2 = "UPDATE attendance SET etime='$t' WHERE eid='$e' and sdate='$d' and etime='00:00:00'";
                if (mysqli_query($conn, $sql2)) {
                    echo' <img src="images/agreement-business-businessmen-886465.jpg" />';
                    echo'<div style="text-align:center ;font-size:40px;top:36%;position:absolute;left:34%">';
                   
                    echo '<h1>See You Tomorrow</h1>';
                    echo'</div>';
                    header("Refresh: 2; url=logout.php");
                } else {
                    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
                    //header("Refresh: 3; url=employee.php");
                }
            }
        }
    }

$conn->close();
?>