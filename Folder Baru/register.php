<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
</head>

<body>
    <h2>Registration</h2>
    <form action="aksi_register.php" method="POST">
        <table>
            <tr>
                <td><label for="username">Username:</label></td>
                <td><input type="text" name="username" id="username" required></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" id="password" required></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" name="email" id="email" required></td>
            </tr>
            <tr>
                <td><label for="namalengkap">Nama Lengkap:</label></td>
                <td><input type="text" name="namalengkap" id="namalengkap" required></td>
            </tr>
            <tr>
                <td><label for="level">Level:</label></td>
                <td>
                    <select name="level" id="level">
                        <option value="Admin">Admin</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="Register">
    </form>
</body>

</html>