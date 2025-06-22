<?php

require 'koneksi.php';

if (isset($_POST['submit'])) {
    if (tambah($_POST) > 0) {
        echo 'Berhasil ditambah';
        header('Location: index.php');
        exit;
    } else {
        echo 'gagal menambah' . mysqli_error($koneksi);
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" required>
            </li>
            <li>
                <label for="nim">Nim : </label>
                <input type="text" name="nim" required>
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" required>
            </li>
            <button type="submit" name="submit">Tambah Data</button>
        </ul>

    </form>

</body>

</html>