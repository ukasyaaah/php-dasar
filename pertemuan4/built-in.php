<?php
//////// BUILT IN Function
// Date : fungsi utk menampilkan tanggal dgn format tertentu
echo date('l, d F Y');
// Artinya :  manggil fungsi di php utk mengelola tanggal
// l : hari, d : tanggal, F : bulan, Y : tahun

echo '<br>';

// Time
// boleh gapake parameter
// Unix timestamp / Epoch Time = Asal mula waktu di dunia IT
// angkta tsb merupakan detik yg udh berlalu sejak 1 Jan 1970
echo date('l', time()); // tampilkan format hari dari waktu saat ini
echo '<br>';
echo date('d M Y', time() + 60 * 60 * 24 * 18); // mengetahui  waktu 18 hari kemudian dari waktu sekarang
echo '<br>';
echo date('d M Y', time() - 60 * 60 * 24 * 18); // mengetahui  waktu 18 hari kebelakang dari waktu sekarang
echo '<br>';

// mktime
// Membuat sendiri detik yg udh berlalu
// urutan parameter : jam, menit, detik, bulan, bulan tanggal, tahun
echo date('l', mktime(0, 0, 0, 11, 2, 2005)); // // tampilkan format hari dari function mktime
echo '<br>';
echo mktime(0, 0, 0, 11, 2, 2005);
echo '<br>';

//strtotime -> kebalikan mktime
// kalo str, masukinnya string
echo strtotime('2 november 2005');
echo '<br>';
echo date('l', strtotime('2 november 2005')); // tampilkan format hari dari fungsi strtotime

// String
// strlen() // utk menghitung panjang string 
// strcmp() // utk menggabungkan 2 buah string
//explode() // memecah sebuah string menjadi array
// htmlspecialchars() // utk menjaga kita dari org yg iseng mau masuk web kita

// Utility
// var_dump() // untuk mencetak isi dari var, array, objek
// isset() // cek apakah variabel udah pernah dibuat blm
// empty() cek apakah variabel yg ada itu kosong ato ga
// die() // untuk menghentikan program kita, jadi kode dibawahnya ga akan dijalankan
// sleep() untuk menghentikan program kita sementara, misal berhenti 2 detik