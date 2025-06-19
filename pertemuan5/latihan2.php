<?php
// Pengulangan pada array, for / foreach
// Menampilkan isi array menggunakan looping

$angka = [1, 2, 3, 4, 54, 545, 54534,];

$bulan = ['Jan', 'Feb', 'Mar', 'Apr'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <!-- Cara menampilkan ke user menggunakan for, bukan var_dump -->
    <!-- count utk menghitung jumlah elemen-->
    <h3>Ini dibuat dengan for</h3>
    <?php for ($i = 0; $i < count($angka); $i++) : ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php endfor ?>

    <div class="clear"></div>

    <!-- Foreach : untuk setiap -->
    <!-- variabel b merepresentasikan satu elemen dari tiap2 elemen di array -->
    <h3>Ini dibuat dengan foreach</h3>
    <?php foreach ($bulan as $b): ?>
        <div class="kotak"><?= $b ?></div>
    <?php endforeach ?>
</body>

</html>