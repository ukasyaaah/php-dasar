<?php
// Pengulangan -> for, while, do.. while.., foreach
// foreach : pengulangan khusus array

// ada 3 kondisi
/* 1. Nilai awal / inisialisasi 
    -> menentukan var / nilai awal utk pengulagannya 
*/
// 2. Kondisi Terminasi -> menghentikan pengulangannya
// 3. increment / decrement

for ($i = 1; $i <= 10; $i++) {
    echo "Nomor ke $i<br>";
}

// while : Selama kondisi true, lakukan yg didalamnya
$w = 0;
while ($w < 5) {
    echo 'While<br>';
    $w++; // Jangan lupa tambahin increment
}

// do while : 
// Jalankan dulu baru cek kondisinya
// lakukan hal ini selama kondisi bernilai true
// ketika bernilai false, maka akan dijalankan dulu 1x
$d = 10;
do {
    echo 'ini do while<br>';
    $d++;
} while ($d < 10);

// untuk templating
// Kurawal buka jadi :
// kurawal tutup jadi endfor, endif, endforeach


/*
 Kalo punya echo yg hanya menampilkan isi dari variabel
ganti <?php echo jadi <?=
*/

// Pengkondisian / Percabangan
// if else, if.. else if.. else, ternary, switch
// elseif klo di templating gapake spasi (digabung)

$kata = 'Halo';
if ($kata == null) {
    echo 'Kosong';
} else if ($kata == 'Halo') {
    echo 'sama<br>';
} else {
    echo 'beda<br>';
}
?>


<?php echo 'Ini pake biasa<br>'; ?>
<?= "Ini pake '<?='"; ?>



