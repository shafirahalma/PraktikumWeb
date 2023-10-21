<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>

<body>
    <h2>Form Unggah Dokumen</h2>
    <form method="post" action="act_upload.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="tgl" required></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><textarea name="deskripsi" cols="30" rows="10" required></textarea></td>
            </tr>
            <tr>
                <td>File</td>
                <td><input type="file" name="berkas" accept="*" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>