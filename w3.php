
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
$ename = $_POST['ename'];
$eid = $_POST['eid'];
$edesig = $_POST['edesig'];
$esalary = $_POST['esalary'];
$ephone = $_POST['ephone'];
$edomain = $_POST['edomain'];
$eaddr = $_POST['eaddr'];
$eem = $_POST['eem'];
$egen = $_POST['egen'];
$ejob = $_POST['ejob'];
$esk = $_POST['esk'];
$equ = $_POST['equ'];
$sql1= "SELECT aid from admin";
$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result);
$aaid=$row["aid"];
$sql = "INSERT INTO employee (ename,eid,edesig,esalary,ephone,eaddr,edomain,aid,ejobloc,eskills,equali,eemail,egender) values ('$ename','$eid','$edesig','$esalary','$ephone','$eaddr','$edomain','$aaid','$ejob','$esk','$equ','$eem','$egen')";

if (mysqli_query($conn, $sql)) {
    echo'<div style="text-align:center ;font-size:40px;top:30%;position:absolute;left:25%">';
    echo '<h1>New record created successfully</h1>';
    echo'</div>';
    header("Refresh: 2; url=Admin.php");
  
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    header("Refresh: 3; url=Admin.php");
}

mysqli_close($conn);
?>
