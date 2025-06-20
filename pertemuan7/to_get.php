<?php
// Cek apakah ga ada data di $_GET -23.41
if (
    // Klo $_GET['nama'] dll blm di set, maka pindah ke halaman latihan1.php
    !isset($_GET['nama']) ||
    !isset($_GET['merk']) ||
    !isset($_GET['warna']) ||
    !isset($_GET['processor']) ||
    !isset($_GET['harga'])
) {
    // redirect
    // harus bener, Location: (jgn spasi setelah Location)
    header("Location:get.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Hp</title>
</head>

<body>
    <h1>Halo <?= $_GET['namaget'] ?>Detail HP</h1>
    <ul>
        <!-- dan data ditangkap oleh variabel super global $_GET  -->
        <li>Nama : <?php echo $_GET['nama'] ?></li>
        <li>Merk : <?php echo $_GET['merk'] ?></li>
        <li>Warna : <?php echo $_GET['warna'] ?></li>
        <li>Processor : <?php echo $_GET['processor'] ?></li>
        <li>Harga : <?php echo $_GET['harga'] ?></li>
    </ul>

    <a href="get.php">Kembali ke Daftar HP</a>
</body>

</html>