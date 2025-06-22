<?php
// iNGAT REQUIRE
require 'koneksi.php';

// GET id data yg dihapus
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
    alert('Data di hapus');
    document.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
    alert('gagal di hapus');
    document.location.href = 'index.php';
    </script>";
}
