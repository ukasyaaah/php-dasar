<?php

// CATATAN
// - INGAT, JGN LUPA <?PHP ATAU <?=
require 'koneksi.php';

// get dulu datanya di variabel
$id = $_GET['id'];

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit;
}

// lakukan query untuk id yg udh di get
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id=$id");

if (isset($_POST["submit"])) {
    if (edit($_POST) > 0) {
        echo 'Berhasil diedit';
        header('Location: index.php');
        exit;
    } else {
        echo 'gagal mengedit<br>';
        echo '<br>';
        echo mysqli_affected_rows($koneksi);
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>

<body>
    <h1>Edit Data Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <?php foreach ($mahasiswa as $mhs): ?>
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
                    <label for="jurusan">Jurusan : </label>
                    <input type="text" name="jurusan" required value="<?= $mhs->jurusan ?>">
                </li>
                <button type="submit" name="submit">Edit Data</button>
            <?php endforeach ?>
        </ul>
    </form>

</body>

</html>