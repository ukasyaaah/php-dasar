<?php

function sayHello()
{
    echo "Hello Ukhasyah!" . PHP_EOL;
}

sayHello();


/// AKAN ERROR JIKA SPT INI 
// $buat = false;

// if ($buat) {
//     function sayHi()
//     {
//         echo "Hi Ukhasyah!" . PHP_EOL;
//     }
// }

// sayHi(); // Error

/// FUNC ARGUMEN
function hello($name)
{
    echo "Hello $name";
}

hello("Ukhasyah");
echo "\n";

///// Default Argumen
function defaultName($name = "Tamu")
{
    echo "Halo $name" . PHP_EOL;
}

defaultName(); // Halo Tamu
defaultName('Hani'); // Halo Hani

/// Kesalahan Default Argumen
function kesalahan($fst = "Tamu", $lst)
{
    echo "Hallo $fst $lst";
}
// kesalahan('Hani'); // Gabisa


////// Type Declaration
function sum(int $a, int $b)
{
    $total = $a + $b;
    echo "Total $a + $b = $total";
}

sum(10, 10); // 20
echo "\n";
sum("10", "10"); //20
echo "\n";
sum(true, false); // 1 + 0 = 1

//// Variable-length 
function sumALl(...$val)
{
    $total = 0;
    foreach ($val as $value) {
        $total += $value;
    }
    echo "Total" . implode(",", $val) . " = $total";
}
// Gaperlu bikin array 
// Semua parameter akan dikonversi jadi array & dimasukkan ke variabel ...$
sumALl(1, 2, 3, 4);
echo "\n";

////// Func Return Value
function ret($q, $w): int
{
    return $q + $w;
}

$total = ret(10, 15);
echo $total;

ret(10, 15);
echo "\n";


// COntoh 2

function getFinal($value): string
{
    if ($value > 90) {
        return "A";
    } elseif ($value > 80) {
        return "B";
    } elseif ($value > 70) {
        return "B-";
    } elseif ($value > 60) {
        return "C";
    } elseif ($value > 40) {
        return "D";
    } else {
        return "E";
    }
}

$nilai = getFinal(89);
echo $nilai;

sum(20, 20);
echo "\n";


////// Variable Funct
function Halo()
{
    echo "Haloww, panggil var function yaa";
}
$panggilFunct = "HAlo";
$panggilFunct();
echo "\n";


/// Penggunaan 
function konversiString(String $name, $filter)
{
    $final = $filter($name);
    echo "Hello $final";
}

konversiString('UKHASYAH', 'strtolower');
konversiString('Zufar Hani A F', 'strtoupper');

/// Anonymous Function
$salam = function ($name) {
    echo "Selamat Pagi, $name";
}; // Gunakan titik koma diakhir func

$salam("Hani");
echo "\n";

// Anonymous func sebagai argumen
konversiString("Hani", function (string $namee) {
    return strtoupper($namee);
});

echo "\n";


// Akses variabel diluar scope
$awl = "Uksh";
$akr = "Fauzan";

$sapa = function () use ($awl, $akr) {
    echo "Haiiii $awl $akr";
};

$sapa();
echo "\n";


////// ARROW FUNC
$awal = "Al";
$akhir = "Fauzan";

$sapaArrow = fn() => "Hello $awal $akhir";
echo $sapaArrow();
echo "\n";


/////// CallBack Function
// Pake callable klo mau nandain ini sbuah funct
function sayCall($name, callable $filter)
{
    $final = call_user_func($filter, $name);
    echo "Aku adalah $final";
}

// Menerima String
sayCall("UKHASYAH", "strtolower");

// Menerima Arrow Function
sayCall(
    "ukhasyah",
    fn($arrname) => strtoupper($arrname)
);

// Menerima Anonymous Function
sayCall('Fauzan', function ($anoname): string {
    return strtoupper($anoname);
});
echo "\n";




