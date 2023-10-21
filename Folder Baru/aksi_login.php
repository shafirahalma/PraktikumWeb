<?php
session_start();
include("koneksi.php");
$username = $_POST['username'];
$pass = $_POST['psw'];
$op = $_GET['op'];

if ($op == "in") {
    $sql = "SELECT * FROM register where username='$username' AND password='$pass'";
    $query = $koneksi->query($sql);
    if (mysqli_num_rows($query) == 1) {
        $data = $query->fetch_array();
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = $data['level'];
        header("location:upload.php");
    } else {
        die("Password salah");
    }
} elseif ($op == "out") {
    session_destroy();
    header("location:form_login.php");
}
