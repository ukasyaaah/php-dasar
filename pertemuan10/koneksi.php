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
