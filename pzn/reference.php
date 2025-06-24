<?php

$name = "Adi";

/* anotherName adalah shortcut 
atau alias dari variabel $name */
$anotherName = &$name;
$anotherName = "Sucipto";

echo $name; // Sucipto
echo "\n";
echo $anotherName; // Sucipto
echo "\n";


/* Ini ga akan ngerubah $counter, 
krn yg dikirim value, bkn counternya */
function increment(int $value)
{
    $value++;
}

$count = 1;
increment($count);
echo $count;
echo "\n";

// Mengirim data ke funct dgn reference
// Tambahkan tanda & pada parameter functionnya
function decrement(int &$value)
{
    $value--;
}
$counter = 10;
decrement($counter);
echo $counter; // 9


//// Returning Reference
function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

echo $a; // 200

$b = &getValue();
echo $b; // 200