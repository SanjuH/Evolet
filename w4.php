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
$ename = $_POST['m1'];
$eid = $_SESSION['varname'];
$edesig = $_POST['m9'];
$esalary = $_POST['m4'];
$ephone = $_POST['m3'];
$edomain = $_POST['m10'];
$eaddr = $_POST['m2'];
$eem = $_POST['m11'];
$egen = $_POST['m5'];
$ejob = $_POST['m8'];
$esk = $_POST['m7'];
$equ = $_POST['m6'];
if(((strlen($ephone))<10)||(strlen($ephone))>10)
{
    echo'<h1>Invalid Phone Number</h1>';
    header("Refresh: 2; url=Admin.php");

}
else{
    $sql1="DELETE FROM employee WHERE eid='$eid'";
    $sql2= "SELECT aid from admin";
    $result = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_assoc($result);
    $aaid=$row["aid"];

    if (mysqli_query($conn, $sql1)) {
        $sql = "INSERT INTO employee (ename,eid,edesig,esalary,ephone,eaddr,edomain,aid,ejobloc,eskills,equali,eemail,egender) values ('$ename','$eid','$edesig','$esalary','$ephone','$eaddr','$edomain','$aaid','$ejob','$esk','$equ','$eem','$egen')";
        if (mysqli_query($conn, $sql)) {
            echo'<div style="text-align:center ;font-size:40px;top:30%;position:absolute;left:25%">';
            echo '<h1>Record Updated successfully</h1>';
            echo '</div>';
        header("Refresh: 2; url=Admin.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            header("Refresh: 4; url=Admin.php");
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        header("Refresh: 4; url=Admin.php");
    }
}
mysqli_close($conn);
?>
