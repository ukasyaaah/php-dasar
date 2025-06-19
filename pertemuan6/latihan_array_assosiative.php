<?php
$hp = [
    [
        'nama' => 'x100',
        'merk' => 'vivo',
        'warna' => 'hijau',
        'processor' => 'Snapdragon 8 gen 3',
        'harga' => 'Rp. 11.000.000',
    ],
    [
        'nama' => 'iPhone 16 Plus',
        'merk' => 'Apple',
        'warna' => 'Silver',
        'processor' => 'A18',
        'harga' => 'Rp. 21.000.000',
    ],
    [
        'nama' => 'S25',
        'merk' => 'Samsung',
        'warna' => 'Black',
        'processor' => 'Snapdragon 8 gen 3 for Galaxy',
        'harga' => 'Rp. 29.000.000',
    ],
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
</head>

<body>
    <h1>Produk Handphone</h1>
    <?php foreach ($hp as $hape): ?>
        <ul>
            <li><?= $hape['nama'] ?></li>
            <li><?= $hape['merk'] ?></li>
            <li><?= $hape['warna'] ?></li>
            <li><?= $hape['processor'] ?></li>
            <li><?= $hape['harga'] ?></li>
        </ul>
    <?php endforeach ?>
</body>

</html>