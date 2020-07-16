<?php
$server = 'localhost';
$username = 'root';
$password = 'zxcv';
$db = 'syn_cepat';
$koneksi = mysqli_connect($server, $username, $password, $db);

if (!$koneksi) {
   die(mysqli_error($koneksi));
}
