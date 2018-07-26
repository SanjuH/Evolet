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