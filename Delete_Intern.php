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
    $flag=0;
    $iid1=$_POST['search'];
    $sql1= "SELECT * from intern";
        $result = mysqli_query($conn, $sql1);
        $numrows=mysqli_num_rows($result);
        if ($numrows!=0) {
            while ($row =mysqli_fetch_assoc($result)) {
                $e1=$row["iid"];
                if ($e1==$iid1) {
                    $flag=1;
         
                    $sql = "DELETE FROM intern WHERE iid='$iid1'";

                    if (mysqli_query($conn, $sql)) {
                        echo'<div style="text-align:center ;font-size:40px;top:30%;position:absolute;left:25%">';
                        echo '<h1>Record deleted successfully</h1>';
                        echo '</div>';
                        header("Refresh: 2; url=Admin.php");
                    }
                }
            }
        }
if($flag!=1) {
    echo'<div style="text-align:center ;font-size:40px;top:30%;position:absolute;left:25%">';
    echo '<h1>Error deleting record: Intern ID Not Found</h1> ';
    echo '</div>';
    header("Refresh: 2; url=Admin.php");
}

$conn->close();
?>