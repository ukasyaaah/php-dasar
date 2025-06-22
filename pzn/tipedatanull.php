<?php

$wadah = 'es';
$wadah = NuLl;

var_dump($wadah); // Output : 

// Cek apakah datanya NULL
var_dump(is_null($wadah));

//atau
if (is_null($wadah)) {
    echo 'Yahaha kosong';
} else {
    echo 'Shhtttt! ada isi nya';
}
echo "\n";

$big = 'big';
unset($big);

var_dump(isset($big));

