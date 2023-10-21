<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="btamu.css">
    <title>Buku Tamu</title>
</head>
<body>
    <h1>Daftar Tamu</h1>
    <div class="container">
    <table border="1" cellspacing="0" cellpadding="3">
        <tr>
            <thead>
                <td>No.</td>
                <th>Id Tamu</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Komentar</th>
            </thead>
        </tr>
        <tbody>
            <?php
            $no = 1;
            include "koneksi.php";
            $a = "SELECT * FROM bukutamu";
            $result=$koneksi->query($a);
            while($row = $result -> fetch_array()){
                ?>
                <tr>
                    <th><?php echo $no++; ?></th>
                    <th><?php echo $row['id_bukutamu']; ?></th>
                    <th><?php echo $row['nama']; ?></th>
                    <th><?php echo $row['email']; ?></th>
                    <th><?php echo $row['komentar']; ?></th>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>
