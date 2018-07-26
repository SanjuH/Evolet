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
$msg=$_POST['message'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['num'];
$addr=$_POST['addr'];
$sql = "INSERT INTO enquery (name,email,phone,addr,msg) values ('$name','$email','$phone','$addr','$msg')";

if (mysqli_query($conn, $sql)) {
    echo'<div style="text-align:center ;font-size:40px;top:30%;position:absolute;left:25%">';
    echo '<h1>Message Sent Successfully</h1>';
    echo '</div>';
    header("Refresh: 2; url=Template.html");
    
  
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    header("Refresh: 3; url=Template.html");
}

mysqli_close($conn);
?>
