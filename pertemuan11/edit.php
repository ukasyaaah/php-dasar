<?php
require 'koneksi.php';

$id = $_GET['id'];

$mahasiswa = query("SELECT * FROM mahasiswa WHERE id='$id'");


if (isset($_POST['submit'])) {
    if (edit($_POST) > 0) {
        echo 'Berhasil';
        header('Location: index.php');
        exit;
    } else {
        echo 'Gagal';
        echo mysqli_affected_rows($koneksi);
        echo mysqli_error($koneksi);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <h1>Edit Data Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <li hidden>
                    <label for="id">id : </label>
                    <input type="text" name="id" required value="<?= $mhs->id ?>">
                </li>
                                <li>
                    <label for="nama">Nama : </label>
                    <input type="text" name="nama" required value="<?= $mhs->nama ?>">
                </li>
                <li>
                    <label for="nim">Nim : </label>
                    <input type="text" name="nim" required value="<?= $mhs->nim ?>">
                </li>
                <li>
                    <label for=" jurusan">Jurusan : </label>
                    <input type="text" name="jurusan" required value=" <?= $mhs->jurusan ?>">
                </li>
                <li>
                    <button type="submit" name="submit">Kirim</button>
                </li>
            <?php endforeach ?>
        </ul>
    </form>
    <h1></h1>
    <a href="index.php">Balik</a>
</body>

</html>