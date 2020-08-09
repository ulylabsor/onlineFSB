<?php
function getUsers()
{
   global $koneksi;
   $d = [];
   $query = "SELECT * FROM users inner join profil on users.id_user=profil.id_user";
   $eks   = mysqli_query($koneksi, $query);
   while ($data = mysqli_fetch_assoc($eks)) {
      $d[] = $data;
   }
   return $d;
}

function getUsersById($idUser)
{
   global $koneksi;
   $query = "SELECT * FROM users inner join profil on users.id_user=profil.id_user WHERE users.id_user = '$idUser'";
   $eks   = mysqli_query($koneksi, $query);
   $data = mysqli_fetch_assoc($eks);

   return $data;
}


function addUsers($user, $pass, $namaDepan, $namBelakang, $level, $status, $jk)
{
   global $koneksi;

   $sql = "INSERT INTO users (username, password, level, status, created_at) VALUES ('$user', '$pass', '$level','$status',CURRENT_TIMESTAMP())";
   $insertUsers = mysqli_query($koneksi, $sql);
   $idUser = mysqli_insert_id($koneksi); //mengambil iduser

   if ($insertUsers) {
      $sql2 = "INSERT into profil (nama_depan, nama_belakang, jk, id_user) VALUES ('$namaDepan','$namBelakang', '$jk','$idUser')";
      $insertProfil = mysqli_query($koneksi, $sql2);
      if ($insertProfil) {
         return $insertProfil;
      }
   }
}

function editUsers($idUser, $user, $pass, $namaDepan, $namBelakang, $level, $status, $jk)
{
   global $koneksi;

   if ($pass == md5('')) {
      $sql = "UPDATE users SET username = '$user', level = '$level',status= '$status' WHERE id_user = '$idUser'";
   } else {
      $sql = "UPDATE users SET username = '$user', password='$pass', level = '$level',status= '$status' WHERE id_user = '$idUser'";
   }

   $updateUsers = mysqli_query($koneksi, $sql);

   if ($updateUsers) {
      $sql2 = "UPDATE profil SET nama_depan ='$namaDepan', nama_belakang='$namBelakang', jk='$jk' WHERE id_user='$idUser'";
      $updateProfil = mysqli_query($koneksi, $sql2);
      if ($updateProfil) {
         return $updateProfil;
      }
   }
}

function deleteUsers($idUser)
{
   global $koneksi;
   $sql = "DELETE FROM users WHERE id_user = '$idUser'";
   $deleteUser = mysqli_query($koneksi, $sql);
   return $deleteUser;
}
