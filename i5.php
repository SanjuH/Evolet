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
$iid = $_SESSION['varname'];
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
$eid=$_POST['m12'];
$pro=$_POST['m13'];
if(((strlen($ephone))<10)||(strlen($ephone))>10)
{
    echo'<div style="text-align:center ;font-size:40px;top:30%;position:absolute;left:25%">';
    echo'<h1>Invalid Phone Number</h1>';
    header("Refresh: 2; url=Admin.php");
    echo '</div>';

}
else{
    $sql1="DELETE FROM intern WHERE iid='$iid'";
    

    if (mysqli_query($conn, $sql1)) {
        $sql = "INSERT INTO intern (iname,iid,idesig,isalary,iphone,iaddr,idomain,iloc,iskills,iquali,iemail,igender,eid,project) values ('$ename','$iid','$edesig','$esalary','$ephone','$eaddr','$edomain','$ejob','$esk','$equ','$eem','$egen','$eid','$pro')";
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
