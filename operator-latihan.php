<?php
$namaBarang         = "Asus ROG 1070";
$jenisBarang        = "Laptop";
$hargaSatuan        = 7000000;
$jumlahbeli         = 2;
$totalbayar         = $hargaSatuan * $jumlahbeli;

$diskon             = $totalbayar * 0.10;
$totalsetelahdiskon = $totalbayar - $diskon;
$bayar              = 13000000;
$kembalian          = $bayar - $totalsetelahdiskon;
echo "Nama Barang         : " . $namaBarang . "<br>";
echo "Jenis Barang        : " . $jenisBarang . "<br>";
echo "Harga Satuan        : Rp." . number_format($hargaSatuan, 0, ',', '.') . "<br>";
echo "Jumlah Beli         : " . $jumlahbeli . "<br>";
echo "Total Bayar         : Rp." . number_format($totalbayar, 0, ',', '.') . "<br>";
echo "Diskon              : Rp." . number_format($diskon, 0, ',', '.') . "<br>";
echo "Total Setelah Diskon: Rp." . number_format($totalsetelahdiskon, 0, ',', '.') . "<br>";
echo "Bayar               : Rp." . number_format($bayar, 0, ',', '.') . "<br>";
echo "Kembalian           : Rp." . number_format($kembalian, 0, ',', '.') . "<br>";
