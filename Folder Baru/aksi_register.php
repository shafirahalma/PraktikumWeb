<?php
// Memasukkan data ke database
include 'koneksi.php';

// Mengambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$email = $_POST['email'];
$nmlengkap = $_POST['namalengkap'];

$sql = "INSERT INTO register (username, password, email, namalengkap, level) VALUES ('$username', '$password', '$email', '$nmlengkap', '$level')";
$query = $koneksi->query($sql);

if ($query) {
    header('location: form_login.php');
} else {
    echo "Registration failed.";
}

$koneksi->close();
