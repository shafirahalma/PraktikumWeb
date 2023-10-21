<?php
$filename = `data.txt`;
$content = `PHP is fun!`;
$content = file_put_contents($filename, $content, FILE_APPEND | LOCK_EX);
