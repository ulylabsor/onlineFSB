<?php
$halaman = isset($_GET['page']) ? $_GET['page'] : '';

if ($_SESSION['Level'] == 'Admin') {
   switch ($halaman) {
      case '':
         include 'view/home.php';
         break;
      case 'home':
         include 'view/home.php';
         break;
      case 'users':
         include 'view/users.php';
         break;
      case 'add-users':
         include 'view/add/add-users.php';
         break;
      case 'edit-users':
         include 'view/edit/edit-users.php';
         break;
      case 'layanan':
         include 'view/layanan.php';
         break;
      case 'add-layanan':
         include 'view/add/add-layanan.php';
         break;
      case 'edit-layanan':
         include 'view/edit/edit-layanan.php';
         break;
      case 'transaksi':
         include 'view/transaksi.php';
         break;
      case 'add-transaksi':
         include 'view/add/add-transaksi.php';
         break;


      case 'act-logout':
         include 'modul/act-logout.php';
         break;
      case 'act-users':
         include 'modul/act-users.php';
         break;
      case 'act-layanan':
         include 'modul/act-layanan.php';
         break;
      case 'act-transaksi':
         include 'modul/act-transaksi.php';
         break;

      default:
         include '404.php';
         break;
   }
} else if ($_SESSION['Level'] == 'Kurir') {
   switch ($halaman) {
      case '':
         include 'view/home.php';
         break;
      case 'home':
         include 'view/home.php';
         break;
      case 'status':
         include 'view/status.php';
         break;

      case 'act-logout':
         include 'modul/act-logout.php';
         break;

      default:
         include '404.php';
         break;
   }
} else if ($_SESSION['Level'] == 'Manager') {
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
         include '404.php';
         break;
   }
}
