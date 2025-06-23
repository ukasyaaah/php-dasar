<?php

$hitung = 1;
while (true) {
    echo "Ulang ke $hitung";
    $hitung++;
    echo "\n";

    /* Gunakan Break utk menghentikan 
    seluruh pengulangan */
    if ($hitung > 10) {
        echo "Udh mentok 10";
        break;
    }
}
