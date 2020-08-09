<?php
if (isset($_POST['btn-addUsers'])) {
   $username    = $_POST['username'];
   $password    = md5($_POST['password']);
   $namaDepan   = $_POST['namaDepan'];
   $namBelakang = $_POST['namaBelakang'];
   $level       = $_POST['level'];
   $status      = isset($_POST['status']) ? 'Aktif' : 'Tidak Aktif';
   $jk          = $_POST['jk'];

   $insert = addUsers($username, $password, $namaDepan, $namBelakang, $level, $status, $jk);

   if ($insert) {
      notif("Data Users berhasil ditambah", 1);
      header("Location: ?page=users");
   }
}

if (isset($_POST['btn-editUsers'])) {
   $idUser      = $_POST['idUser'];
   $username    = $_POST['username'];
   $password    = md5($_POST['password']);
   $namaDepan   = $_POST['namaDepan'];
   $namBelakang = $_POST['namaBelakang'];
   $level       = $_POST['level'];
   $status      = isset($_POST['status']) ? 'Aktif' : 'Tidak Aktif';
   $jk          = $_POST['jk'];

   $update = editUsers($idUser, $username, $password, $namaDepan, $namBelakang, $level, $status, $jk);

   if ($update) {
      notif("Data Users berhasil ditambah", 1);
      header("Location: ?page=users");
   }
}


if (isset($_GET['aksi'])) {
   if ($_GET['aksi'] = 'delete') {
      $iduser = $_GET['id'];

      $deleteUser = deleteUsers($iduser);
      if ($deleteUser) {
         notif("Data Users berhasil dihapus", 1);
         header("Location: ?page=users");
      }
   }
}
