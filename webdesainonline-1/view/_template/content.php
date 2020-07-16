<?php
$halaman = isset($_GET['page']) ? $_GET['page'] : '';

switch ($halaman) {
   case '':
      include 'view/home.php';
      break;
   case 'home':
      include 'view/home.php';
      break;
   case 'reg':
      include 'view/reg.php';
      break;
   case 'yes':
      include 'view/yes.php';
      break;
   case 'rating':
      include 'view/ratings.php';
      break;
   case 'ongkir':
      include 'view/ongkir.php';
      break;
   case 'login':
      include 'view/login.php';
      break;
   case 'register':
      include 'view/register.php';
      break;


      //ACTION FORM
   case 'act-login':
      include 'modul/act-login.php';
      break;
   case 'act-register':
      include 'modul/act-register.php';
      break;
   case 'act-logout':
      include 'modul/act-logout.php';
      break;

   default:
      echo "HALAMAN TIDAK DITEMUKAN 404";
      break;
}
