<?php
// Array multi dimensi : array yang isinya array lagi

// Array numeric : array yg indexnya angka
$mahasiswas = [['Zufar', '24033', 'TRPL'], ['Hani', '65065', 'TRMG']];

$mahasiswa = ['Al', '23032', 'TRKJ']
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswas as $m): ?>
        <ul>
            <li>Nama : <?= $m[0] ?></li>
            <li>Nim : <?= $m[1] ?></li>
            <li>Jurusan : <?= $m[2] ?></li>
        </ul>
    <?php endforeach ?>

    <!-- atau 1 data -->

    <ul>
        <?php foreach ($mahasiswa as $ms): ?>
            <li><?= $ms ?></li>
        <?php endforeach ?>
    </ul>


</body>

</html>