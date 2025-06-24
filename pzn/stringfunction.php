<?php

// Gabungkan array jadi string dengan "," -> 10,20,30
var_dump(join(",", [10, 20, 30,]));

// Mecah string JADI ARRAY
var_dump(explode(" ", "Ukhasyah Zufar Hani A F"));

// lower & UPPER
var_dump(strtolower("tolOWWER"));
var_dump(strtoupper("toUpper"));

// Ngambil sebagian string 
// Ambil karakter ke 0 sampe ke 3
var_dump(substr("Hallo" , 0, 3));

// Menghapus white space / spasi (hanya bagian paling depan & belakang)
var_dump(trim("   Hello  "));
//