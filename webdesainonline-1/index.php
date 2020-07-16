<?php
session_start();
require 'koneksi/conn.php';
require 'function/load-function.php';
?>

<!doctype html>
<html lang="en">

<head>
   <?php include 'view/_template/kepala.php' ?>
</head>

<body>
   <?php include 'view/_template/header.php' ?>

   <?php include 'view/_template/content.php' ?>


   <?php include 'view/_template/footer.php' ?>

   <?php include 'view/_template/kaki.php' ?>
</body>

</html>