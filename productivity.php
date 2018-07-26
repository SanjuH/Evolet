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
    
    $eid=$_SESSION['username1'];

    $sqlcheck = "SELECT eid FROM employee";

    $result = mysqli_query($conn,$sqlcheck);
    $numrows = mysqli_num_rows($result);
    if($numrows!=0) {
        while($row = mysqli_fetch_assoc($result)) {
            $echeck = $row["eid"];
            if($echeck == $eid) {
                $sqlat = "SELECT sdate FROM attendance WHERE eid='$echeck'";
                $resultat = mysqli_query($conn,$sqlat);
                $numrowsat = mysqli_num_rows($at);
                if($numrowsat!=0) {
                    $ind = 0;
                    $ind1=0;
                    while($rowat = mysqli_fetch_assoc($resultat)) {
                        $date = $rowat["sdate"];
                        $day = before('-',$date);
                        $month = between('-','-',$date);
                        $checkmonth[$ind] = $month;
                        $checkday[$ind1] = $day;
                        $numdays = 0;
                        $numhours = 0;
                        if($checkmonth[$ind]!=$month) {
                            $ind=$ind+1;
                            $sqlmhrs = "INSERT INTO empprod(eid,monthlydays,monthlyhrs) values ('$echeck','$numdays','$numhours')"
                            mysqli_query($conn,$sqlmhrs);
                        }
                        else {
                            if($checkday[$ind1]!=$numdays) {
                                $numdays = $numdays + 1;
                            }
                            else {
                                $starttime = $row["stime"];
                                $endtime = $row["etime"];
                            }
                        }
                    }
                }
            }
        }
    }
?>