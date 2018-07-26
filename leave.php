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
    $rs=$_POST['name'];
    $fd=$_POST['num1'];
    $ld=$_POST['num2'];
    $cm=$_POST['comm'];
    $flag=0;
    $sql1= "SELECT * from employee";
    
    $result = mysqli_query($conn, $sql1);
    $numrows=mysqli_num_rows($result);
    if ($numrows!=0) {
        while ($row =mysqli_fetch_assoc($result)) {
            $e=$row["eid"];
            if ($e==$_SESSION["username1"]) {
                $flag=1;
                $en=$row["ename"];
                $ep=$row["ephone"];
                $ee=$row["eemail"];
                $sql="INSERT INTO leve(ename,eid,eemail,ephone,reason,sdate,ldate,comm) values ('$en','$e','$ee','$ep','$rs','$fd','$ld','$cm')";
                if (mysqli_query($conn, $sql)) {
                    echo'<div style="text-align:center ;font-size:40px;top:30%;position:absolute;left:25%">';
                    echo '<h1>Leave Applied Successfully</h1>';
                    header("Refresh: 2; url=employee.php");
                    echo '</div>';
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    //header("Refresh: 3; url=employee.php");
                }
            }
        }
    }

$conn->close();
?>