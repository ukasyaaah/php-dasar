<?php
// Koneksi ke database PAKE CARA LAMA
$koneksi = mysqli_connect("localhost", "root", "", "phpdasar",);


// Ambil data dari tabel mahasiswa / query data mahasiswa
/* Ketika melakukan query, maka mysqli_query akan melakukan 2 hal
1.  Klo berhasil maka berhasil, 
    klo mencari maka mencari, 
    klo nambah dia nambah, 
    klo ngapus dia akan menghapus & 
2.  mengembalikan nilai true  
*/
// Klo gagal, maka dia akan ngembaliin nilai false
$hasil =  mysqli_query($koneksi, "SELECT * FROM mahasiswa",);

// ambil data (fetch) mahasiswa dari objek hasil -> 4 cara
// mysqli_fetch_row() -> mengembalikan array numeric, $mhs['1']
// mysqli_fetch_assoc() -> mengembalikan array asosiatif, $mhs['nama]
// mysqli_fetch_array() -> mengembalikan array asosiatif & numerik (-nya datanya double), bisa keduanya
// mysqli_fetch_object() -> mengembalikan objek, $mhs->nama

// while ($mhs = mysqli_fetch_object($hasil)) {
//     var_dump($mhs);
// };
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($mhs = mysqli_fetch_object($hasil)) : ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="">Edit</a> |
                    <a href="">Hapus</a>
                </td>
                <td><?= $mhs->nama ?></td>
                <td><?= $mhs->nim ?></td>
                <td><?= $mhs->jurusan ?></td>
            </tr>
            <?php $i++ ?>
        <?php endwhile ?>
    </table>
</body>

</html>