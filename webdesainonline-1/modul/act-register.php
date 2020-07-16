<?php
$namaDepan    = $_POST['firstName'];
$namaBelakang = $_POST['lastName'];
$username     = $_POST['username'];
$password     = $_POST['password'];
$jk           = $_POST['jk'];

$sqlUsers = "INSERT INTO users(username, password, status, level, created_at) VALUES ('$username','$password','Aktif','Customer',CURRENT_TIMESTAMP())";
$insertUsers = mysqli_query($koneksi, $sqlUsers);

$idUser = mysqli_insert_id($koneksi);

if ($insertUsers) {
   $sqlProfil = "INSERT INTO `profil`(`nama_depan`, `nama_belakang`, `jk`, `id_user`) VALUES ('$namaDepan','$namaBelakang','$jk','$idUser')";
   $insertProfil = mysqli_query($koneksi, $sqlProfil);

   notif("Pendaftaran berhasil. Silakan login !", 1);
   header("Location: ?page=login");
}
