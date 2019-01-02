<?php

$filename="takepicture.txt";
$fop=fopen($filename,"w+");
fwrite($fop,"1");
fclose($fop);

echo "{\"status\":\"Ok\"}";

?>
