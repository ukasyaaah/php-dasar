<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
// Untuk menghubungkan halaman ini dgn koneksi.php
require 'koneksi.php';

// Lakukan query utk mendapat seluruh data mahasiswa
$mahasiswa = query('SELECT * FROM mahasiswa');

if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

var_dump($_POST['keyword']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin's Page</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <a href="logout.php">Logout</a>
    <br>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br>
    <form action="" method="post">
        <input type="text" name="keyword" autofocus placeholder="Cari Mahasiswa" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>

    <table cellpadding='10' cellspacing='0' border="1">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs): ?>
            <tr>
                <td><?= $i ?></td>
                <td><a href="edit.php?id=<?= $mhs->id ?>">Ubah</a> | <a href="hapus.php?id=<?= $mhs->id ?>" onclick="return confirm('Yakin mau dihapus?')">Hapus</a></td>
                <td><?= $mhs->nama ?></td>
                <td><?= $mhs->nim ?></td>
                <td><?= $mhs->jurusan ?></td>

            </tr>
            <?php $i++; ?>
        <?php endforeach ?>
    </table>



</body>

</html>