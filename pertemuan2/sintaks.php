<?php  
/// Sintaks PHP

// ini komentar 1 baris
/*
ini komentar
untuk 2 baris
*/

/// Standar Output
// echo, print, 

/// Biasanya dipake untuk debugging
// print_r // untuk mencetak array
// var_dump // untuk mencetak isi dari var, array, objek

echo 'Ukhasyah Fauzan<br>'; // Untuk String '' atau ""
echo 123;
echo true;
echo false; // output kosong

var_dump(false); // output bool(false)

print 'Ukhasyah Fauzan<br>'; 

/// print_r harus pake kurung
print_r ('Ukhasyah Fauzan pake print_r<br>');

var_dump ('Hani<br>'); // output string(4)'Hani'

var_export(8); // ini mirip var_dump tapi lebih readable.

/// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP -> tidak disarankan

/// Variabel & Tipe Data
// 1. cukup tanda $ + nama variabelnya
$nama = 'Ukhasyah';
// 2. Gaperlu mendefinisikan tipe data
// 3. nama var gaboleh diawali dengan angka, tp boleh mengandung angka
// 4. nama var gaboleh ada spasinya, klo ada pake underscore (_)

$angka = 10;         // integer
$teks = "hello";     // string
$benar = true;       // boolean
$array = [1, 2, 3];  // array

/// Interpolasi
// "" petik 2 lebih sakti, krn dgn petik 2 kita bisa pake interpolasi
echo 'Halo nama saya $nama<br>'; // yg muncul bukan isi variabel nya
echo "nama saya $nama<br>"; // nama saya (isi variabelnya)

/// Operator
// Aritmatika -> + - * /
$x = 20;
$y = 30;
echo $x + $y,'<br>';
echo 1 + 1,'<br>';
echo 2 - 2,'<br>';
echo 3*3,'<br>';

/// Penggabung String / concat
// pake titik (.) , klo js pake plus (+) 
// pake "" buat spasi
$nama_depan = 'Ukhasyah';
$nama_blkg = 'Fauzan';
echo $nama_depan . " " . $nama_blkg;

/// Operator Penugasan
// = , +=, -=, *= /=, %=, .=
$a = 5;
$a += 1;
echo $a,'<br>'; // += adlh 5 + 1

$namaa = 'Zufar';
$namaa .= '';
$namaa .= 'Hani';
echo $namaa,'<br>'; // .= adlh var . var

/// Operator Perbandingan
// <, >, <=, >=, ==, != -> cuma ngecek nilai nya, bukan tipe datanya
// biasanya dipake pas pengkondisian
var_dump(1>2); //-> false
var_dump(1 == '1'); //-> true

/// Operator Identitas -> ngecek nilai & tipe datanya juga
// ===, !==
var_dump(1 === '1'); // -> false, krn walaupun nilainya sama, tp tipedatanya beda

/// Operator Logika / pengkondisian
// and && (dua2nya harus bener), or || (salah satunya true, maka hasilnya true), not !

$c = 30;
var_dump($c > 20 || $c % 2 == 1);

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nama . "'s PHP Document";?></title>
</head>
<body>
    <h1>Hallo <?php echo $nama; ?></h1>
    <p><?= 'ini adalah paragraf, dalam php gapapa kalo punya tag php lebih dari 1 dlm 1 file';?></p>
    <?= '<h4> Hello ini H4</h4>';?>
</body>
</html>