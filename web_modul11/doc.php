<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table border="1">
            <tr>
                <th>Tanggal</th>
                <th>Deskripsi</th>
                <th>File</th>
                <th>Nama File</th>
                <th>Tipe File</th>
                <th>Ukuran File</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <?php include 'koneksi.php' ?>
                <?php $asd = $koneksi->query("SELECT * FROM document"); ?>
                <?php while ($d = $asd->fetch_array()) : ?>
                <?php if ($d['tipe_file']=="pdf" || $d['tipe_file']=="doc" || $d['tipe_file']=="docx") { ?>
                <td><?= $d['tgl']; ?></td>
                <td><?= $d['deskripsi']; ?></td>
                <td><?= $d['file']; ?></td>
                <td><?= $d['nama_file']; ?></td>
                <td><?= $d['tipe_file']; ?></td>
                <td><?= Number_format($d['ukuran_file']/(1024*1024), 2) ?> MB</td>
                <td><a href="download.php?url=<?php echo $d['file']; ?>">Download</a></td>
                <?php } else { ?>
                <td><?= $d['tgl']; ?></td>
                <td><?= $d['deskripsi']; ?></td>
                <td>
                    <img src="<?= $d['file']; ?>" width="100px">
                </td>
                <td><?= $d['nama_file']; ?></td>
                <td><?= $d['tipe_file']; ?></td>
                <td><?= $d['ukuran_file']; ?> Bytes</td>
                <td><a href="download.php?url=<?php echo $d['file']; ?>">Download</a></td>
                <?php }?>
            </tr>
            <?php endwhile; ?>
        </table>
    </form>
</body>
</html>