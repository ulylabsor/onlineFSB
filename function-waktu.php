<?php
function tgl_format_indo($tanggal, $cektakHari = false)
{
   $hari = [1 => 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];

   $bulan = [1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];


   // 2020-07-08 20:31:12
   $pisah        = explode(' ', $tanggal);
   $tgl          = $pisah[0];
   $pisahTanggal = explode('-', $tgl);

   $tgl_convert = $pisahTanggal[2] . ' ' . $bulan[(int) $pisahTanggal[1]] . ' ' . $pisahTanggal[0];

   if ($cektakHari) {
      $x = date("N", strtotime($tanggal));
      return $hari[$x] . ', ' . $tgl_convert;
   }

   return $tgl_convert;
}
