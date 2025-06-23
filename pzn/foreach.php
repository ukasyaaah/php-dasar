<?php

$nama = [
    "Ukhasyah",
    "Zufar",
    "Hani",
];

foreach ($nama as $n):
    echo "Nama ku $n" . PHP_EOL;
    echo "\n";
endforeach;

// For each dgn key

$person = [
    "first" => "Ukhasyah",
    "last" => "Fauzan",
    "nilai" => [
        "mtk" => 70
    ]
];


foreach ($person as $key => $value) :
    echo $key . PHP_EOL; // tampilkan key nya

    /// Lakukan Pengecekan, apakah value nya array
    if (is_array($value)) {
        foreach ($value as $k => $v) {
        }
    }
    echo $value  . PHP_EOL;
    echo $v;

endforeach;
