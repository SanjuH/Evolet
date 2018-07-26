
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
$e1=$_POST['ename'];
$e=$_POST['eemail'];
$p=$_POST['psw'];
$i=$_POST['eid'];
                $sql= "INSERT INTO csreg(cname,cid,cemail,cpwd) values ('$e1','$i','$e','$p')";
                if (mysqli_query($conn, $sql)) {
                    echo'<div style="text-align:center ;font-size:40px;top:30%;position:absolute;left:25%">';
                    echo '<h1>Registration successfull</h1>';
                    echo '</div>';
                    header("Refresh: 2; url=Admin.php");
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    header("Refresh: 3; url=Admin.php");
                

                  
        }
    
   
    
mysqli_close($conn);
?>
