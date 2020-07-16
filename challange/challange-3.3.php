<?php

function cetakPrima($n = 50)
{
   for ($i = 1; $i <= $n; $i++) {
      $bil = 0;
      for ($x = 1; $x <= $i; $x++) {
         if ($i % $x == 0) {
            $bil++;
         }
      }
      if ($bil == 2) {
         return $i . " &nbsp;";
      }
   }
}

echo cetakPrima(100); //panggil fungsi
