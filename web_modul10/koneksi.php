<?php
$host = "localhost"; // untuk host
$username = "root"; // untuk username
$password = ""; // untuk password
$database = "dbs_akademik"; //untuk nama database
$koneksi = mysqli_connect($host,$username,$password,$database);
if ($koneksi) {
    echo "OK";
}else{
    echo "Server not connected";
}
?>
</body>
</html>
