<?php
function calculateFactorial($num)
{
   if ($num === 1) {
      return 1;
   } else {
      return $num * calculateFactorial($num - 1);
   }
}


echo calculateFactorial(5);
echo "<hr>";

function countdown($i)
{
   echo $i . "<br>";
   if ($i <= 0) {
      return $i;
   } else {
      countdown($i - 1);
   }
}
echo countdown(10);

$handle = fopen("https://ianbali.files.wordpress.com/2010/06/silabus-pemrograman-web-php-mysql1.pdf", "r+");
var_dump($handle);
