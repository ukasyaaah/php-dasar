<?php
// Review Materi Array

$bulan = array('Jan', 'Feb'); // versi lama
$hari = ['Senin', 'Selasa', 'Rabu']; // versi baru
$arr = [100, 'teks', true, null, 1, '2'];
$angka = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
echo $angka[1][1]; // mencetak array multidimensi
echo '<br>';

// Menampilkan array versi debugging / utk dev
var_dump($bulan);
echo '<br>';
print_r($bulan); // Lebih ringkas
echo '<br>';
echo $arr[0]; // nampilin 1 elemen
echo '<br>';

?>

<!-- // Menampilkan array utk user / menggunakan pengulangan -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Materi Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: lightseagreen;
            text-align: center;
            margin: 3px;
            float: left;

        }

        .kotak:hover {
            background-color: goldenrod;
            transition: 0.5s;
            transform: rotate(360deg);
            border-radius: 24%;
            border-color: black;
        }
        .clear{
            clear: both;
        }
    </style>
</head>

<body>
    <?php foreach ($angka as $ang): ?>
        <?php foreach ($ang as $a) : ?>
            <div class="kotak">
                <p><?php echo $a ?></p>
            </div>
        <?php endforeach ?>
        <div class="clear"></div>
    <?php endforeach ?>
</body>

</html>