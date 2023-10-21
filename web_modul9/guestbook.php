<?php
$content = $_POST['nama'].';'.$_POST['komentar']."\n";
$myFile = "guestbook.txt";
$fh = fopen ($myFile, 'a+') or die ("can' open file");
fwrite($fh,$content);
fclose($fh);
$read = fopen($myFile,'r') or die ("can't open file");
echo "Komentar sebelumnya : <br><br>";
while (! feof($read))
{
  $theData = fgets($read);
  $arrData = explode(";",$theData);
  for ($i =0; $i < count($arrData)-1; $i++) {
    echo "nama : ",$arrData[$i],"<br>"; 
    for ($j =1; $j <count($arrData);$j++) {
      echo "komentar : ", $arrData[$j],"<br>";
  }
  echo "================= <br>";
}
}

  fclose($read);
?>




