<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Form Login</h2>
    <form action="act_login.php?op=in" method="post">
        <table>
            <tr>
                <td>Username : </td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><input type="password" name="psw"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>

</html>