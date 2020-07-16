<form action="" method="POST">
   <label for="bintang">Berapa jumlah bintang?</label>
   <input type="text" name="bintang" id="bintang">
   <button type="submit">Proses</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $bintang = $_POST['bintang'];
   for ($i = $bintang; $i >= 1; $i--) {
      for ($x = 1; $x <= $i; $x++) {
         echo "*";
      }
      echo "<br>";
   }
   for ($i = 1; $i <= $bintang; $i++) {
      for ($x = 1; $x <= $i; $x++) {
         echo "*";
      }
      echo "<br>";
   }
}
?>