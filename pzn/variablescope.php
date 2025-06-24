<?php
$nama = "Ukhasyah"; // Global scope

/// Global Function
function globas()
{
    global $nama;
    echo $nama . " lagi belajar php", PHP_EOL;
}

globas();

function create()
{
    echo $GLOBALS['nama'] . PHP_EOL;
    "\n";
    $namanya = 'ZUFAR'; // Local scope
    echo $namanya;
    "\n";
}

create();
echo "\n";

/// Local Scope 
function local()
{
    $local = "Halo";
    echo $local;
}

/// Static Scope
function increment()
{
    // Siklus hidupnya terus menerus
    static $counter = 1;
    echo "Count = $counter";

    $counter++;
}
/* 
Ketika function dipanggil, maka counter akan 
mendapat value dari function sebelumnya
*/
increment();
increment();
increment();
increment();
