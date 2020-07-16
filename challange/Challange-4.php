<?php
$x = [
   [90, 35, 87],
   [10, 15, 76],
   [70, 34, 92],
];

for ($i = 0; $i < count($x); $i++) {
   for ($y = 0; $y < count($x[$i]); $y++) {
      if ($i == 1) {
         echo "<span style='background-color:red; color:white'>" . $x[$i][$y] . " " . "</span>";
      } else  if ($i == 2) {
         echo "<span style='background-color:blue; color:white'>" . $x[$i][$y] . " " . "</span>";
      } else  if ($i == 0) {
         echo "<span style='background-color:green; color:white'>" . $x[$i][$y] . " " . "</span>";
      } else {
         echo $x[$i][$y] . " ";
      }
   }
   echo "<br>";
}
