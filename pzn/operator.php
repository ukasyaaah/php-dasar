<?php

/// Operator Aritmatika
$hitung = 10 + 10;

echo -$hitung;
echo "\n";
echo $hitung;
echo "\n";

/// Operator Penugasan Aritmatika
$total = null;

$es = 2000;
$bakpia = 10000;
$gudeg = 14000;

$total += $es;
$total += $bakpia;
$total += $gudeg;

echo $total . PHP_EOL;

// Perbandingan
var_dump("10" == 10);  // Cek value aja
var_dump("10" === 10); // Cek tipe data

if ($total and $hitung == 10) {
    return 'ya';
} else {
    echo 'ga';
}
echo "\n";


/// Operator Logika
var_dump(true and true); // true
var_dump(true and false); // false
var_dump(true or true); // true
var_dump(true or false); // true
var_dump(true xor true); // false
var_dump(true xor false); //true

/// Operator Increment Decrement
$a = 10;

/// a akan disimpan di b dulu baru di + kan
$b = $a++; // pas di simpen di b = 10, tpi a = 11

/// a akan ditambah dulu baru di simpan ke b
$b = ++$a; // sblm masuk b, a ditambah dulu jadi 12

var_dump($b);


$first = [
    "first" => "Billie",
    "last" => "Eilish",

];

$last = [
    "last" => "Eilish",
    "first" => "Billie",
];

var_dump($first == $last);
