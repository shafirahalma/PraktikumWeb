<!DOCTYPE html>
<html>

<head>
    <title>Daftar Dokumen</title>
    <style>
        table {
            wkode_docth: 50%;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solkode_doc black;
            padding: 8px;
            text-align: left;
        }

        .download-button {
            background-color: green;
            color: white;
            padding: 6px 12px;
            border: none;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin-top: 8px;
        }
    </style>
</head>

<body>
    <h2>Daftar Dokumen</h2>
    <table>
        <tr>
            <th>Tanggal</th>
            <th>Deskripsi</th>
            <th>File</th>
            <th>Aksi</th>
        </tr>
        <?php include 'koneksi.php'; ?>
        <?php $query = $koneksi->query("SELECT * FROM document"); ?>
        <?php while ($row = $query->fetch_assoc()) : ?>
            <tr>
                <td><?php echo $row['tgl']; ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td>
                    <img src="image.php?kode_doc=<?php echo $row['kode_doc']; ?>" width="100px">
                </td>
                <td>
                    <a href="download.php?kode_doc=<?php echo $row['kode_doc']; ?>" class="download-button">Download</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

</body>

</html>