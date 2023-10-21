<html>

<head>
    <title>Form Login</title>
</head>

<body>
    <h2>Form Login</h2>
    <form action="aksi_login.php?op=in" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="psw" required><br><br>

        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>