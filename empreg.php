
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
$e=$_POST['eemail'];
$p=$_POST['psw'];
$i=$_POST['eid'];
$sql1= "SELECT ename,eid from employee";
$result = mysqli_query($conn, $sql1);
$numrows=mysqli_num_rows($result);
    if ($numrows!=0) {
        while ($row =mysqli_fetch_assoc($result)) {
            $i1=$row["eid"];
            $e1=$row["ename"];

            if ($i == $i1) {
                $flag=1;
                $sql= "INSERT INTO empreg(empname,empemail,empid,empass) values ('$e1','$e','$i','$p')";
                if (mysqli_query($conn, $sql)) {
                    echo'<div style="text-align:center ;font-size:40px;top:30%;position:absolute;left:25%">';
                    echo '<h1>Registration successfull</h1>';
                    echo '</div>';
                    header("Refresh: 2; url=employee.php");
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    header("Refresh: 3; url=Emplog.html");
                }

            }
           
        
        }
    }
    if ($flag!=1) {
        echo'<div style="text-align:center ;font-size:40px;top:30%;position:absolute;left:25%">';
        echo 'Employee ID Does\'nt Exist';
        echo '</div>';
        header("Refresh: 2; url=Emplog.html");
    }
    
mysqli_close($conn);
?>
