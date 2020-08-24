<?php
function getTransaksi()
{
   global $koneksi;
   $transaksi = [];
   $sql = "SELECT * FROM transaksi inner join tracking_history on transaksi.no_resi=tracking_history.no_resi";
   $query  = mysqli_query($koneksi, $sql);
   while ($data = mysqli_fetch_assoc($query)) {
      $transaksi[] = $data;
   }

   return $transaksi;
}

function getTransaksiById($noResi)
{
   global $koneksi;
   $sql = "SELECT * FROM transaksi inner join tracking_history on transaksi.no_resi=tracking_history.no_resi WHERE transaksi.no_resi = '$noResi'";
   $query  = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
   $data = mysqli_fetch_assoc($query);

   return $data;
}

function addTransaksi($data)
{
   global $koneksi;
   $sql = "INSERT INTO transaksi VALUES (
   '$data[noResi]',
   '$data[namaBarang]',
   '$data[beratBarang]',
   '$data[jenisBarang]',
   '$data[namaPengirim]',
   '$data[kontakPengirim]',
   '$data[namaPenerima]',
   '$data[kontakPenerima]',
   '$data[totalBiaya]',
   '$data[layanan]',
   '$data[ongkir]'
   )";

   $insertTransaksi = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

   return $insertTransaksi;
}

function addTrackingHistory($noResi)
{
   global $koneksi;
   $statusPertama = 'On Progress Curier';
   $sql = "INSERT INTO tracking_history (no_resi, history, datetime) VALUES ('$noResi','$statusPertama', CURRENT_TIMESTAMP())";

   $insertTracking = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

   return $insertTracking;
}
