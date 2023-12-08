<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

//Standar Output
//echo, print
//print_r
//var_dump

echo "Asrul Hidayat ";
print "ashiday ";

//Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan tipe data
// Variabel
// tidak boel diawali dengan angka, tapi boleh mengandung angka

$nama = "Cellu ";

echo "nama saya $nama";

// Operator Aritmatika
// + - * / %
$x = 10;
$y = 20;
echo $x * $y;

// penggabungan string /concatennation / concat
// . 

$nama_depan = " Asrul";
$nama_belakang =  "Hidayat";
echo $nama_depan . " " . $nama_belakang;

//Assignment
// =, +=, -+, *=, / +, %=. .=
$a = 1;
$a -= 5;
echo $a;

// perbandingan
// >, <, <=, >=, ==
var_dump(1 == "1");

// Identitas
// ===, ==!
var_dump(1 == "1");

//Logika
// &&, ||, !
$b = 30;
var_dump ($b < 20 || $b % 2 == 0);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo "Cellu"; ?></h1> 
    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1> 
    
</body>
</html>
