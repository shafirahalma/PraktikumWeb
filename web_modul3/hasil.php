<?php
$a=$_POST['username'];
$a=$_POST['password'];
$a=$_POST['nama'];
$a=$_POST['alamat'];
$a=$_POST['jk'];
?>

<html>
    <head>
        <title> </title>
        <body>
            <table border="1">
            <tr>
                <thead>
                <th>Username</th>
                <th>Password</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                </thead>
            </tr>
            <tr>
                <tbody>
                    <th><?php echo $a; ?></th>
                    <th><?php echo $a; ?></th>
                    <th><?php echo $a; ?></th>
                    <th><?php echo $a; ?></th>
                    <th><?php echo $a; ?></th>
                </tbody>
            </tr>
        </body>
    </head>
</html>