
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
