<?php
// 1. Koneksi ke database
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

    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $jurusan = htmlspecialchars($data['jurusan']);

    // query insert data
    $query = "INSERT INTO mahasiswa (nama, nim, jurusan) VALUES ('$nama','$nim','$jurusan')";
    mysqli_query($koneksi, $query);

    // cek berhasil ditambah
    return mysqli_affected_rows($koneksi);
}

function hapus($id)
{
    global $koneksi;

    // query delete data
    $query = "DELETE FROM mahasiswa WHERE id=$id";

    mysqli_query($koneksi, $query);

    // cek berhasil dihapus
    return mysqli_affected_rows($koneksi);
}

function edit($data)
{
    global $koneksi;

    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $jurusan = htmlspecialchars($data['jurusan']);

    $query = "UPDATE mahasiswa SET 
    nama='$nama', 
    nim='$nim', 
    jurusan='$jurusan' 
    WHERE id='$id'";

    mysqli_query($koneksi, $query);

    // Cek berhasil diubah
    return mysqli_affected_rows($koneksi);
}

function cari($keyword)
{
    // LIKE biar pas nyari cuma sebagian doang bisa muncul, 
    // Tambabhin % juga di variabel keyword nya
    // tambahin OR utk nyari field yg lain
    $query = "SELECT * FROM mahasiswa WHERE 
    nama LIKE '%$keyword%' OR 
    nim LIKE '%$keyword%' OR 
    jurusan LIKE '%$keyword%'";

    return query($query);
}
