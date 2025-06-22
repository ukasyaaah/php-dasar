<?php
// Koneksi ke database
$koneksi = mysqli_connect('localhost', 'root', '', 'phpdasar');


function query($query)
{
    global $koneksi;

    // ambil data dari tabel mahasiswa / query data mahasiswa
    $hasil = mysqli_query($koneksi, $query);
    $kotak = []; // kotak untuk bawain data

    // ambil data / fetch dari objek hasil
    while ($data = mysqli_fetch_object($hasil)) {
        $kotak[] = $data; // masukin datanya kedalam kotak
    }
    return $kotak;
}
