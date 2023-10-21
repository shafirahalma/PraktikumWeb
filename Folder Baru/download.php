<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "modul");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_GET['kode_doc'])) {
    $kode_doc = $_GET['kode_doc'];

    // Mengambil data gambar berdasarkan kode_doc
    $query = "SELECT deskripsi, file FROM document WHERE kode_doc = $kode_doc";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Mengatur header untuk tipe file
        header("Content-Type: image/png");

        // Mengatur header untuk men-download file dengan nama yang ditentukan
        header("Content-Disposition: attachment; filename=" . $row['deskripsi'] . ".png");

        // Mengirimkan gambar
        echo $row['file'];
    }
}

mysqli_close($conn);
