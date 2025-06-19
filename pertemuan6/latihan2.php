<?php
$mahasiswa = [['Zufar', '24033', 'TRPL'], ['Hani', '65065', 'TRMG']];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek 1</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs): ?>
        <ul>
            <li>Nama : <?= $mhs[0] ?></li>
            <li>Nim : <?= $mhs[1] ?></li>
            <li>Jurusan : <?= $mhs[2] ?></li>
        </ul>
    <?php endforeach ?>
</body>

</html>