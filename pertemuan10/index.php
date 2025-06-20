<?php
require 'koneksi.php';
$mahasiswa = query('SELECT * FROM mahasiswa');

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
    <a href="tambah.php">Tambah Data Mahasiswa</a>
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
                <td><a href="">Ubah</a> | <a href="hapus.php?id=<?= $mhs->id ?>" onclick="return confirm('Yakin mau dihapus?')">Hapus</a></td>
                <td><?= $mhs->nama ?></td>
                <td><?= $mhs->nim ?></td>
                <td><?= $mhs->jurusan ?></td>

            </tr>
            <?php $i++; ?>
        <?php endforeach ?>
    </table>



</body>

</html>