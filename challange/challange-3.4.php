<form action="" method="POST">
   <label for="kedua">Masukkan angka:</label>
   <input type="text" name="kedua" id="kedua">
   <button type="submit">Proses</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $angka  = $_POST['kedua'];
   $panjang = strlen($angka); //input 12345 => 5
   $x = 0;

   for ($i = 1; $i <= $panjang; $i++) {
      $awal = substr($angka, $x++, 1); //substr('12745',1,1) => 2
      $nol = $panjang - $x; //5-2 =3
      echo $awal; //2
      for ($c = 1; $c <= $nol; $c++) {
         echo  "0"; //000
      }
      //10000
      //2000
      echo "<br>";
   }
}
