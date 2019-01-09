<?php
$filename="ytalk.txt";
$fop=fopen($filename,"w+");

fwrite($fop,$_POST["say"]);
fclose($fop);
echo "{\"status\":\"Ok\"}";
?>
