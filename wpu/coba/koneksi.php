<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'phpdasar');


function query($query)
{
    global $koneksi;

    $hasil = mysqli_query($koneksi, $query);
    $box = [];

    while ($data = mysqli_fetch_object($hasil)) {
        $box[] = $data;
    }
    return $box;
}

function tambah($data)
{
    global $koneksi;
    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $jurusan = htmlspecialchars($data['jurusan']);

    // kalo insert gausah pake nama='', langsung aja VALUES ('$nama',dll)
    $query = "INSERT INTO mahasiswa (nama, nim, jurusan) VALUES ('$nama', '$nim', '$jurusan')";
    mysqli_query($koneksi, $query);

    /// untuk ngembaliin nilai, bahwa berhasil di tambah
    return mysqli_affected_rows($koneksi);
}

function edit($data)
{
    global $koneksi;
    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $jurusan = htmlspecialchars($data['jurusan']);

    // PAKE UPDATE & SET BUKAN SELECT * FROM
    // JANGAN LUPA DI AKHIR PAKE WHERE id nya
    $query = "UPDATE mahasiswa SET 
    nama='$nama', 
    nim='$nim', 
    jurusan='$jurusan' 
    WHERE id=$id";
    mysqli_query($koneksi, $query);

    // Tambah ini untuk mengembalikan nilai baris yg diubah
    // ini juga untuk cek berhasil di edit
    return mysqli_affected_rows($koneksi);
}


function hapus($data)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id=$data");

    // ingettt Tambah ini untuk mengembalikan nilai baris yg diubah
    return mysqli_affected_rows($koneksi);
}

function cari($keyword)
{

    $query = "SELECT * FROM mahasiswa WHERE 
    -- Langsung masukin keyword ke querynya, gausah bikin variabel dulu
    nama LIKE '%$keyword%' OR
    nim LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%'";

    // gausah pake mysqli_query
    // Jan lupa return query nyaa
    return query($query);
}
