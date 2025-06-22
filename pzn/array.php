<?php
// Cara lama
$arrayLama = array("String", 1, true, 7.5, null);
var_dump($arrayLama);

// Cara Baru
$arrayBaru = ["String", 1, true, 7.5, null];
var_dump($arrayBaru);

$arrayKosong = [];
var_dump($arrayKosong);

/// OPERASI ARRAY

// Ambil data 
var_dump($arrayBaru[0]); // String

// Ubah Data
$arrayBaru[1] = "Satu";

// Tambah data
$arrayBaru[] = 'Baru nihh';

// Hapus data
unset($arrayBaru[4]);

// Hitung total data pd array
echo count($arrayBaru); // 5 -> index 0 juga di itung

/// Map as Array
$anggota = [
    "Nama" => "Budi Santasa",
    "Umur" => 25,
];

echo $anggota['Nama'];

/// Array in Array
$mahasiswa = [
    "nama" => "Adi",
    "Jurusan" => "DKV",
    "Nilai" => [
        "MTK" => 80,
        "IPS" => 60,
        "PKN" => 87,
    ],
];

echo $mahasiswa["Nilai"]["IPS"];