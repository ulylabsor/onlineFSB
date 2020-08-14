<?php
if (isset($_POST['btn-addLayanan'])) {
   $Layanan      = $_POST['layanan'];
   $Keterangan   = $_POST['keterangan'];

   $insert = addLayanan($Layanan, $Keterangan);
   if ($insert) {
      notif("Data Layanan berhasil ditambah", 1);
      header("Location: ?page=layanan");
   }
}

if (isset($_POST['btn-editLayanan'])) {
   $idLayanan    = $_POST['idLayanan'];
   $Layanan      = $_POST['layanan'];
   $Keterangan   = $_POST['keterangan'];


   $update = editLayanan($idLayanan, $Layanan, $Keterangan);
   if ($update) {
      notif("Data Layanan berhasil diubah", 1);
      header("Location: ?page=layanan");
   }
}

if (isset($_GET['aksi'])) {
   if ($_GET['aksi'] = 'delete') {
      $idlayanan = $_GET['id'];

      $deleteLayanan = deleteLayanan($idlayanan);
      if ($deleteLayanan) {
         notif("Data Layanan berhasil dihapus", 1);
         header("Location: ?page=layanan");
      }
   }
}
