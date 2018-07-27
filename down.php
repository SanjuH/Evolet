
<?php
    
        $file='Resume_Form.txt';
        header('Content-type: text/plain');
        header('Content-Disposition: attachment;filename="'.$file.'"');
        readfile('Evolet/'.$file);
        exit();
    
    ?>
