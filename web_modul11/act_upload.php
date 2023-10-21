<?php
if (isset($_POST["submit"])) {

    $tgl = $_POST["tgl"];
    $des = $_POST["deskripsi"];

    $nama_tmp = $_FILES['berkas']['tmp_name'];
    $nama = $_FILES['berkas']['name'];
    $size = $_FILES['berkas']['size'];
    $tipe = $_FILES['berkas']['type'];

    $ekstensiValid = ['jpg', 'jpeg', 'png', 'docx', 'doc', 'pdf'];
    $ekstensi = explode('.', $nama);
    $ekstensi = strtolower(end($ekstensi));

    if (!in_array($ekstensi, $ekstensiValid)) {
        echo "<script>alert('yang diupload harus gambar atau dokumen (.doc atau .pdf) !')</script>";
        echo "<script>document.location.href='upload.php'</script>";
    }

    if ($size > 2000000) {
        echo "<script>alert('ukuran file tidak boleh lebih dari 2MB')</script>";
        echo "<script>document.location.href='upload.php'</script>";
    }

    $place = 'file/' . $nama;

    if (file_exists($place)) {
        echo "<script>alert('File sudah ada!')</script>";
        echo "<script>document.location.href='upload.php'</script>";
    } else {
        move_uploaded_file($nama_tmp, $place);
        echo "<script>alert('Berhasil Upload File')</script>";

        include 'koneksi.php';
        $qq = $koneksi->query("INSERT INTO document VALUES (NULL, '$tgl', '$des', '$place', '$nama', '$ekstensi', '$size') ");
        if ($qq) {
            echo "<script>alert('Data berhasil ditambahkan')</script>";
            echo "<script>document.location.href='doc.php'</script>";
        }
    }
}
