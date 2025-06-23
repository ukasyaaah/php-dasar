<?php

// IF Statement
if (true) {
    // jalankan ini;
    // klo lebih dari satu bisa pake kurung kurawal
}

// Atau

if (true):
// JALANKAN INI; 
endif;

/////////// Contoh if 
$uts = 75;
$uas = 84;

if ($uts >= 74 and $uas >= 74)
    echo "Kamu Lulus";

echo "\n";
/////////// Else Statement
if (true)
    //statement
;
else
    //statement
;

// atau

if (true) {
    // Statement
} else {
    // Statement

}

////////// Else if
if (true)
    // statement
;
elseif (true)
    // statement
;
else
    // statement
;

// Atau
if (true) {
    // Statement
} elseif (false and false) {
    // Statement
} else {
    // Statement
}

///// Alternative
if (true):
// JALANKAN INI; 
endif;

/// Switch

$grade = "A";
switch ($grade):
    case "A":
        echo "Lulusan terbaik";
        break;
    case  "B":
        echo "Lulus";
        break;
    case "C":
        echo "Ga Lulus";
        break;
    default:
        echo " Kamu salah jurusan";
endswitch;

/// Ternary Operator

$gender = "Men";

$hi = $gender == "Men" ? 
"Hi Broww" : "Hi Wemen :v";
