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
$sql1= "SELECT * from internresume";
        $result = mysqli_query($conn, $sql1);
        $numrows=mysqli_num_rows($result);
        if ($numrows!=0) {
            while ($row =mysqli_fetch_assoc($result)) {
                $id=$row["id"];
                $name=$row["name"];
                $mail=$row["email"];
                if ($id==$_SESSION['id1']) {
                    $sql="INSERT INTO seintern(id,sname,semail) values ('$id','$name','$mail')";

                    if (mysqli_query($conn, $sql)) {
                        echo'<div style="text-align:center ;font-size:40px;top:30%;position:absolute;left:25%">';
                        echo '<h1>Resume Selected successfully</h1>';
                        echo '</div>';
                        header("Refresh: 2; url=employee.php");
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        header("Refresh: 4; url=employee.php");
                    }
                }
            }
        }

mysqli_close($conn);
?>
