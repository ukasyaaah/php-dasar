<?php
$mahasiswa = [['Zufar', '24033', 'TRPL'], ['Hani', '65065', 'TRMG']];

// Array Assosiative : Key-nya adlh string yg kita buat sendiri
//$santri itu adalah variabel yang isinya adalah sebuah array.
$santri = [
    [
        "nama" => 'Ukhasyah',
        "nim" => 240250,
        "jurusan" => 'TRPL',
        'tugas' => [90, 80, 75],
    ],
    [
        "nama" => 'Zufar',
        "nim" => 73920,
        "jurusan" => 'TRMG',
        'tugas' => [
            'mtk' => 90,
            'indo' => 80,
            'sejarah' => 75
        ],
    ]
];

echo $santri[1]['nama']; // Tampilkan santri dari index 1, ambil field nama
echo $santri[1]['tugas'][2]; // Tampilkan santri dari index 1, akses field tugas, ambil nilai yg ke 2

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Array Assosiative</title>
</head>

<body>
    <h1>Data2 Mahasiswa</h1>
    <?php foreach ($santri as $s) : ?>
        <ul>
            <li><?= $s['nama'] ?></li>
            <li><?= $s['nim'] ?></li>
            <li><?= $s['jurusan'] ?></li>
            <?php foreach ($s['tugas'] as $i => $nilai) : ?>
                <li>Tugas <?= $i ?> : <?php echo $nilai ?></li>
            <?php endforeach ?>

        </ul>
    <?php endforeach ?>
</body>

</html>