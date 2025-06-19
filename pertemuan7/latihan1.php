<?php
// Variabel Scope / lingkup variabel
$lokal = 10; // ini adalah variabel lokal yg hanya bisa diakses di file ini

function varFunc()
{
    $func = 20; // ini adalah variabel lokal utk function ini aja
    echo $func;
}

// agar variabel lokal bisa diakses di function tambahkan 'global'
function iniVarGlobal()
{
    global $lokal; // ini menggunakan var yg ada di luar function
    echo $lokal;
}

varFunc(); // 20
echo '<br>';
iniVarGlobal(); // 10
