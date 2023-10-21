  <form action="proses02.php" method="post" name="input">
        Nama Anda: <input type="text" name="nama" required>
        <br>
        <input type="submit" name="input" value="Input">
    </form>

    <?php
    if (isset($_POST['input'])) {
        $nama = $_POST['nama'];
        echo "Nama Anda: <b>$nama</b>";
    }

    ?>
