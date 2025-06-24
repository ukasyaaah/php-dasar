<?php

$dataArray = [1, 2, 3, 4, 5, 6, 7, 8];
$mapFunct = fn($val) => $val * 10;

$dataKeyValue = [
    "Nama"=> "Hani",
    "Asal" => "Bekasi",
];

// Mengubah data array dgn callback (callback, array)
// var_dump(array_map($mapFunct, $dataArray));

// Urutkan data array kecil ke besar
sort($dataArray);
var_dump($dataArray);

// Reverse Sort -> Kebalikannya
rsort($dataArray);
var_dump($dataArray);

// Ambil semua Keys milik array
var_dump(array_keys($dataKeyValue));

// Ambil semua Values milik array
var_dump(array_values($dataKeyValue));




