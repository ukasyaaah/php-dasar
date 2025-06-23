<?php
// Dot Operator
echo "Nama : " . "Ukhasyah";
echo "\n";
echo "Nilai : " . 100;
echo "\n";


// Konversi ke Number & Sebaliknya
$toString = (string)100;
var_dump($toString);

$toNumber = (int)"100"; // Klo datanya salah, otomatis jadi 0
var_dump($toNumber);

$toFloat = (float)"100.22"; // Klo datanya salah, otomatis jadi 0
var_dump($toFloat);

/// Akses Karakter
$nama = "ADI";

echo $nama[0] . PHP_EOL; // A
echo $nama[1] . PHP_EOL; // D
echo $nama[2] . PHP_EOL; // I

// Variable Parsing
$jeneng = "Hani";
$materi = "PHP";

echo "Halo $jeneng, Selamat Belajar $materi" . PHP_EOL;

// Variabel Parsing
echo "This is {$jeneng}'s Account" ;