<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>  <style>
               form {
                   top: 100px;
               }
               .nav-align {
                   height: 100px;
                   background-color: #d4d1d1;
               }

               .nav-design {
                   position: relative;
                   top: 35px;
                   /* margin-left: 129px; */
                   left: -70px;
                   font-size: 20px;
                   /* margin-right: 22px; */
               }

               .li :hover {
                   background-color: white !important;
                   color: black !important;
                   height: 50px !important;
                   width: 200px !important;
                   text-align: center;
                   border-radius: 3px 3px;
               }

               .li :active {
                   background-color: white !important;
                   color: black !important;
               }

               .li {
                   margin-right: 10px;
               }

               .footer {
                   background-color: black;
                   width: 100%;
                   height: 150px;
                   color: gray;
               }

               .icons {
                   display: inline;
                   font-size: 38px;
                   left: 635px;
                   position: relative;
                   top: 20px;
               }

               button:hover {
                   color: white !important;
                   background-color: black !important;
               }

               .p-align {
                   position: relative;
                   font-size: 20px;
                   top: 15px;
                   left: 750px;
               }

               .icons-align {
                   margin-right: 10px;
               }

               .p1-align {
                   position: relative;
                   top: 20px;
                   left: -32px;
               }

               .b1 {
                   font-size: 25px;
                   font-family: serif;
               }

               .color {
                   color: gray !important;
               }
               .thead
               {
                   background-color:lightgray;
               }

               body
               {

                    background-image:url(images/background-cement-concrete-242236.jpg);


               }
               table {
                   border-collapse: collapse !important;
                  
                }

               table, th, td {
                   border: 1px solid slategray !important;

                  }
    </style>
</head>
<body>
    
</body>
</html>
<?php
if($_FILES["file"]["error"]>0)
{
    echo 'error';
}

else{
    move_uploaded_file($_FILES["file"]["tmp_name"],"/xampp/htdocs/Evolet/Resume/".$_FILES["file"]["name"]); 
    echo'<div style="text-align:center ;font-size:40px;top:30%;position:absolute;left:25%">';
    echo '<h1>File Uploaded Successfully</h1>';
    echo '</div>';
header("Refresh: 2; url=employee.php");
}
?>