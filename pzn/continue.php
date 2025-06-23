<?php

for ($h = 0; $h <= 10; $h++) :
    if ($h % 2 == 0) {
        /// Akan dihentikan atau di Skip
        continue;
    }
    echo "Ulang ke $h" . PHP_EOL;
    echo "\n";
endfor;
