<html>
  <head>
    <style type="text/css">
    table {
    	border-collapse: collapse;
    }        
    td {
    	border: 1px solid green;
    	padding: 0 0.5em;
    }        
    </style>
  </head>
  <body>
	<?php
	include 'reader.php';
    $excel = new Spreadsheet_Excel_Reader();
	?>
	Sheet 1:<br/><br/>
    <table>
    <?php
    $excel->read('Resume.xls');    
    $x=2;
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
    while($x<=$excel->sheets[0]['numRows']) {
      echo "\t<tr>\n";
      $y=1;$i=0;
      while($y<=$excel->sheets[0]['numCols']) {
        $cell = isset($excel->sheets[0]['cells'][$x][$y]) ? $excel->sheets[0]['cells'][$x][$y] : '';
        $col[$i]=$cell;
        $y++;
        $i++;
      }  
      echo "\t</tr>\n";
      $x++;
      echo "\t\t<td>$col[0]</td>\n";  
      $sql1="INSERT INTO internresume(name,email,phone,addr,dpay,field,quali,exp1,skills,gen) values ('$col[0]','$col[1]','$col[2]','$col[3]','$col[4]','$col[5]','$col[6]','$col[7]','$col[8]','$col[9]')";
      if (mysqli_query($conn, $sql1)) {
          echo 'Success';
      }
      else{
        echo  'error;';
      }
    }
    ?>    
   
    
	
	
  </body>
</html>
