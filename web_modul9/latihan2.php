<?php 
$myFile = "testFile.txt";
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
$theData = fgets($fh);
fclose($fh);
echo $theData;
?>