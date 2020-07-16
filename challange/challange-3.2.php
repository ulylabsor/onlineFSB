<ol>
   <li>Penjumlahan</li>
   <li>Pengurangan</li>
   <li>Perkalian</li>
   <li>Pembagian</li>
</ol>

<form action="" method="POST">
   <label for="fungsi">Silakan pilih fungsi yang akan digunakan:</label>
   <input type="text" name="fungsi" id="fungsi"><br>
   <label for="pertama">Masukkan angka pertama:</label>
   <input type="text" name="pertama" id="pertama"><br>
   <label for="kedua">Masukkan angka kedua:</label>
   <input type="text" name="kedua" id="kedua">
   <button type="submit">Proses</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $fungsi  = $_POST['fungsi'];
   $pertama = $_POST['pertama'];
   $kedua   = $_POST['kedua'];

   switch ($fungsi) {
      case '1':
         $kata = "Penjumlahan";
         $hasil = $pertama + $kedua;
         break;
      case '2':
         $kata = "Pengurangan";
         $hasil = $pertama - $kedua;
         break;
      case '3':
         $kata = "Perkalian";
         $hasil = $pertama * $kedua;
         break;
      case '4':
         $kata = "Pembagian";
         $hasil = $pertama / $kedua;
         break;

      default:
         $kata = "Tidak dikenali";
         $hasil = "-";
         break;
   }
   echo "Hasil " . $kata . " adalah " . $hasil;
}

?>