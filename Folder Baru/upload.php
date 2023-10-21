<!DOCTYPE html>
<html>

<head>
    <title>Upload Dokumen</title>
</head>

<body>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tanggal = $_POST["tanggal"];
        $deskripsi = $_POST["deskripsi"];
        $targetDir = "uploads/"; // Direktori tujuan penyimpanan file
        $namaFile = $_FILES["file"]["name"];
        $targetPath = $targetDir . $namaFile;

        // Periksa apakah file sudah ada atau belum
        if (file_exists($targetPath)) {
            echo "File sudah ada.";
        } else {
            // Coba unggah file
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath)) {
                echo "Dokumen berhasil diunggah.";
                // Lanjutkan dengan pemrosesan lainnya seperti menyimpan informasi ke database
                // ...
            } else {
                echo "Terjadi kesalahan saat mengunggah dokumen.";
            }
        }
        // Memasukkan data ke database
        include 'koneksi.php';

        // Mengambil data dari form
        // $tgl = $_POST['tanggal'];
        // $deskripsi = $_POST['deskripsi'];
        // $file = $_POST['file'];

        $sql = "INSERT INTO document (tgl, deskripsi, file) VALUES ('$tanggal', '$deskripsi', '$namaFile')";
        $query = $koneksi->query($sql);
    }
    if (isset($query) && $query) {
        header("Location: download.php");
        exit;
    }

    ?>

    <h2>Form Unggah Dokumen</h2>
    <form method="post" enctype="multipart/form-data">
        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" required><br><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea name="deskripsi" id="deskripsi" rows="4" required></textarea><br><br>

        <label for="file">File:</label>
        <input type="file" name="file" id="file" required><br><br>

        <input type="submit" value="Unggah">
    </form>

</body>

</html>