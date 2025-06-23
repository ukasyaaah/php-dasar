<?php
$userArr = [];
$userNull = NuLl;
$user = "Adhi";

$salamArr = $userArr['nama'] ?? "Guyys" . PHP_EOL;
$salamNull = $userNull ?? "Broo" . PHP_EOL;
$salam = $user ?? "Guest" . PHP_EOL;

echo "Selamat Datang, $salam" . PHP_EOL;

/// Function
function Hahh($hello)
{
    // Pake tanda kurung (), klo mau digabung sm operator
    $p = "Hello " . ($hello ?? "Tamu");
    return $p;
}

echo Hahh(null);
