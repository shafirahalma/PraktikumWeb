<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
    die("Anda belum login");
}

$username = $_SESSION['username'];
$level = $_SESSION['level'];
if ($level == 'admin') {
    echo "Anda Sebagai" . $level;
    header("location:upload.php");
} elseif ($level == 'mahasiswa') {
    echo "Anda Sebagai" . $level;
    header("location:upload.php");
} elseif ($level == 'dosen') {
    echo "Anda Sebagai" . $level;
    header("location:upload.php");
}
