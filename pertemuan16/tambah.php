<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'koneksi.php';
$koneksi = mysqli_connect('localhost', 'root', '', 'phpdasar');

if (isset($_POST['submit'])) {

    if (tambah($_POST) > 0) {
        echo "Data berhasil ditambah";
        header('Location: index.php');
        exit;
    } else {
        echo "Data gagal ditambah : " . mysqli_affected_rows($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
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
            <li>
                <button type="submit" name="submit">Kirim</button>
            </li>
        </ul>
    </form>
    <h1></h1>
    <a href="index.php">Balik</a>
</body>

</html>