
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
$e=$_POST['email'];
$p=$_POST['pwd'];
$sql1= "SELECT aname,aemail,apwd from admin";
$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result);
$e1=$row["aemail"];
$p1=$row["apwd"];
$user=$row["aname"];

if($e == $e1 && $p == $p1)
{
    session_start();
	$_SESSION['sess_user']=$user;
	$_SESSION['username']=$user;
    header('Location: Admin.php');

}
else
{
    echo'<div style="text-align:center ;font-size:40px;top:30%;position:absolute;left:25%">';
    echo "Invalid Credentials";
    echo '</div>';
    header("Refresh: 2; url=Adminlog.html");
  
    

}
mysqli_close($conn);
?>
