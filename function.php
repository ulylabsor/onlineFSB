<?php
//TANPA PARAMETER
function sayHay()
{
   return "Halo Selamat Datang Budi";
}

//WITH PARAMETER

function sayHallo($hello)
{
   return "Selamat Datang " . $hello;
}

// sayHay();
echo sayHallo("Budi");
echo "<br>";
echo sayHallo("Ani");
echo "<br>";
echo sayHallo("joko");
echo "<br>";


$angka3 = 2;
echo kalkulator('bagi', 30, 10);
echo "<br>";
echo kalkulator('tambah', 30, 10);


function kalkulator($operator, $angka1, $angka2)
{
   global $angka3;
   if ($operator == 'tambah') {
      $hasil = $angka1 + $angka2 + $angka3;
   } else if ($operator == 'kurang') {
      $hasil = $angka1 - $angka2 + $angka3;
   } else if ($operator == 'kali') {
      $hasil = $angka1 * $angka2 + $angka3;
   } else if ($operator == 'bagi') {
      $hasil = $angka1 / $angka2 + $angka3;
   }
   return $hasil;
}


//Fungsi Menampilkan Waktu dengan FORMAT 
// Rabu, 08 Juli 2020
echo "<hr>";

date_default_timezone_set('Asia/Jakarta');
echo $tanggal = date("Y-m-d H:i:s");
echo "<br>";
include 'function-waktu.php';

echo tgl_format_indo($tanggal, true);
