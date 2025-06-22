<?php

echo 'Decimal : ';
var_dump(1234); // 1234

echo 'Octal : ';
var_dump(01234); // 668

echo 'Hexadecimal :';
var_dump(0x2f); // 47

echo 'Binary :';
var_dump(0b11111); // 31

echo 'Underscore in number :';
// untuk mempermudah membaca angka
var_dump(1_000_000); // 1000000

echo 'Floating Point : ';
var_dump(1.300);

echo 'Floating Point dg E Notation + : 1.2 x 1000 :';
var_dump(1.2e3);

echo 'Floating Point dg E Notation - : 1.2 x 0.001 : ';
var_dump(1.2e-3);

echo 'Underscore di floating point : ';
var_dump(1_200_000);