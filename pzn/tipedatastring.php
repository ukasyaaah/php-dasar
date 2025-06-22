<?php

// Single Quote
echo 'Nama : ';
echo 'Ukhasyah Zufar Hani A F' . PHP_EOL;

// Double Quote
// bisa escape sequence kek \n ato \t
echo "Asal : ";
echo "Jawa\t Tengah,\t Indonesia";
echo "\n";

// Heredoc -> kek petik 2
echo <<<Waw
Ini adalah teks yg
sangat puanjang syekalii
hehehe
Waw;

echo "\n";

// Nowdoc -> kek petik 1
echo <<<'single'
ini punajang juga 
bisa "quote" juga mweheeh
single;
