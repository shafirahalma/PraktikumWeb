<?php
$file = fopen("guestbook.txt", "r");
if ($file) {
  while (($line = fgets($file)) !== false) {
    $data = explode(';', $line);
    $name = $data[0];
    $comment = $data[1];
    echo "<strong>$name:</strong> $comment<br><br>";
  }
  fclose($file);
} else {
  echo "Gagal membuka file guestbook.txt";
}
?>
