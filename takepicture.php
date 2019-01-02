<?php

$filename="takepicture.txt";
$fop=fopen($filename,"w+");
fwrite("1",$fop);
fclose($fop);

echo "{\"status\":\"Ok\"}";

?>
