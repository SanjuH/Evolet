<?php
$to = "nikithareddy63@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: debapriyoevolettechnologies@gmail.com" . "\r\n" .
"CC: dpchoudhuri@gmail.com";

mail($to,$subject,$txt,$headers);
?>