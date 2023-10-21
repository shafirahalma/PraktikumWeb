<?php
session_start();
include 'koneksi.php';
$user = $_POST['username'];
$psw = md5($_POST['psw']);

$op = $_GET['op'];

if ($op == "in") {

    $h_1 = $koneksi->query("SELECT * FROM register WHERE username='$user' AND password='$psw'");
    if (mysqli_num_rows($h_1) == 1) {
        $id_1 = $h_1->fetch_array();
        $_SESSION['username'] = $id_1['username'];
        $_SESSION['level'] = $id_1['level'];
        if ($id_1['level'] == "Admin") {
            header('location:home.php');
        } elseif ($id_1['level'] == "Mahasiswa") {
            header('location:home.php');
        } elseif ($id_1['level'] == "Dosen") {
            header('location:home.php');
        } else {
            die("password salah <a href=\'javascript:history.back()\'>kembali</a>");
        }
    }
} elseif ($op == "out") {
    unset($_SESSION["username"]);
    unset($_SESSION["level"]);
    header("location:login.php");
}
