<?php
// Array 
// variabel yg bisa menampung lebih dari 1 nilai
// pasangan antara key & value, 
// key nya index yg dimulai dari 0
// element2 pada 1 array boleh beda

// Cara lama bikin array
$bulan = array("Jan", 'Feb', 3, 4);


// Cara Baru
$hari = ['Senin', 'Selasa', 'Rabu', 'Kamis'];


// Menampilkan Array -> var_dump() / print_r
var_dump($hari); // nampilin isi array + tipe data & panjang karakter
echo '<br>';
print_r($bulan); // sama aja, tp lebih ringkas (gapake tipe data), tapi menampilkan pasangan key & value

// Menampilkan 1 elemen pada array
echo $hari[1];
echo '<br>';
echo "Hari ini hari $hari[1]";
echo '<br>';

// Menambahkan elemen baru pada array
$hari[] = 'Jumat';
echo $hari[4];
echo '<br>';
var_dump($hari);

