<?php
$halaman = isset($_GET['page']) ? $_GET['page'] : '';

switch ($halaman) {
   case '':
      include 'view/home.php';
      break;
   case 'home':
      include 'view/home.php';
      break;

   case 'act-logout':
      include 'modul/act-logout.php';
      break;

   default:
      echo "HALAMAN TIDAK DITEMUKAN 404";
      break;
}
