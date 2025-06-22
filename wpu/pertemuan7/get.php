<?php
// Variabel Scope / lingkup variabel
$lokal = 10; // ini adalah variabel lokal yg hanya bisa diakses di file ini

function varFunc()
{
    $func = 20; // ini adalah variabel lokal utk function ini aja
    echo $func;
}

// agar variabel lokal bisa diakses di function tambahkan 'global'
function iniVarGlobal()
{
    global $lokal; // ini menggunakan var yg ada di luar function
    echo $lokal;
}

varFunc(); // 20
echo '<br>';
iniVarGlobal(); // 10
echo '<br>';

// Superglobals : variabel2 global milik php yg bisa diakses dimanapun & kapanpun
// Dari 7 ini, semuanya adalah array assosiative
// $_GET -> datanya dikirim lewat url (ada di url)
// $_POST -> datanya dikirim lewat form (gada di url)(bisa juga dgn get)
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

echo $_GET;
echo '<br>';
var_dump($_GET);

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
];
?>
php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar HanfP</h1>
    <ul>
        <?php foreach ($hp as $hape) : ?>
            <!-- // Data dikirim dengan request method get -->
            <!-- Metode request get adlh metode pengiriman data melalui url & data tsb bisa diambil / ditangkap oleh variabel super global $_GET-->
            <li><a href="to_get.php?nama=<?php echo $hape['nama'] ?>&merk=<?php echo $hape['merk'] ?>&warna=<?php echo $hape['warna'] ?>&processor=<?php echo $hape['processor'] ?>&harga=<?php echo $hape['harga'] ?> "><?= $hape['nama'] ?></li></a>
        <?php endforeach; ?>
    </ul>

    <form action="to_get_form.php" method="get">Nama :
        <input type="text" name="namaget">
        <br>
        <button type="submit" name="submit_get">Kirim Get</button>
    </form>

</body>

</html>