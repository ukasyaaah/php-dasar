<?php
// User-Defined Function
// 1. fungsinya harus definisikan dulu
// 2. Kasih nilai default
function salam($waktu = 'Datang', $nama = 'User')
{
    return "Selamat $waktu, $nama!";
}

function hitungUmur($tahunLahir)
{
    // $sekarang = date('Y');
    $sekarang = date('Y');
    return $sekarang -  $tahunLahir;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>

<body>
    <h1><?php echo salam(); ?></h1>
    <h2><?php echo "Umur Kamu" . ' ' . hitungUmur(2005) ?></h2>
</body>

</html>