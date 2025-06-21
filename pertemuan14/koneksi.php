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

function reg($data)
{
    global $koneksi;

    //stripslashes: biar gada backslash (\).
    $username =  strtolower(stripslashes($data['username']));
    $password =  mysqli_real_escape_string($koneksi, $data['password']);
    $password2 =  mysqli_real_escape_string($koneksi, $data['password2']);

    // cek username dh ada blm
    $hasilUsername =  mysqli_query($koneksi, "SELECT username FROM user WHERE username='$username' ");
    if (mysqli_fetch_object($hasilUsername)) {
        echo "yahaha username dh ada :v ganti gih!";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
alert('password ga sama');
</script>";
        return false;
    }

    // enkripsi password -> bisa pilih algortimanya, cth:PASSWORD_BCRYPT
    $password = password_hash($password, PASSWORD_BCRYPT);

    // masukin database
    $query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    mysqli_query($koneksi, $query);

    // utk hasilin angka 1 klo berhasil
    return mysqli_affected_rows($koneksi);
}
