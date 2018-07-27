
<?php
    
        $file='Resume1.xls';
        header('Content-type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$file.'"');
        readfile('Evolet/'.$file);
        exit();
    
    ?>
