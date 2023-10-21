<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h2>Registration</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>Username </td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password </td>
                <td><input type="password" name="pwd"></td>
            </tr>
            <tr>
                <td>Ulangi Password </td>
                <td><input type="password" name="pwd2"></td>
            </tr>
            <tr>
                <td>Nama Lengkap </td>
                <td><input type="name" name="nama"></td>
            </tr>
            <tr>
                <td>Email </td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td>
                    <select name="level">
                        <option value="Admin">Admin</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Dosen">Dosen</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php
include 'koneksi.php';
if (isset($_POST["submit"])) {
    $user = $_POST["username"];
    $pwd = md5($_POST["pwd"]);
    $pwd2 = md5($_POST["pwd2"]);
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $lvl = $_POST['level'];

    if ($pwd != $pwd2) {
        echo "<script>alert('Password tidak sama!')</script>";
    } else {
        $asd = $koneksi->query("INSERT INTO register VALUES('$user', '$pwd', '$email', '$nama', '$lvl') ");
        echo "<script>alert('Berhasil')</script>";
        echo "<script>document.location.href='login.php'</script>";
    }
}
?>