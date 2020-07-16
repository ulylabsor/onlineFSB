<?php
//OPERATOR ARITMATIKA
$angka1 = 8;
$angka2 = 4;

$tambah = $angka1 + $angka2;
$kurang = $angka1 - $angka2;
$kali   = $angka1 * $angka2;
$bagi   = $angka1 / $angka2;
$mod    = $angka1 % $angka2;

echo $tambah . "<br>";
echo $kurang . "<br>";
echo $kali . "<br>";
echo $bagi . "<br>";
echo $mod . "<br>";

echo "<hr>";

//OPERATOR UNARY
$x = -$angka1 * $angka2;
echo $x;


echo "<hr>";
//OPERATOR ASSIGMENT
$angka3 = 100;

echo "<hr>";
//OPERATOR PERBANDINGAN
// >, <, >=, <=, ==, != / <>
$y = $angka1 === $angka2;

//OPERATOR LOGIKA

$b = !(5 > 3);
$z = ((($angka1 == $angka2) && ($angka2 <> 5)) || $b);

var_dump(!$b);

echo "<hr>";
// OPERATOR INCREMENT DAN DECREMENT
//INCREMENT
$a1 = 5;
echo $a1++ . "<br>";
echo $a1;

echo "<hr>";
//DECEREMENT
$a2 = 5;
echo $a2-- . "<br>";
echo $a2;
