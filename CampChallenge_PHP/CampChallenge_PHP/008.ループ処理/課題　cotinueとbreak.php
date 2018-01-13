<?php

$data1 = array(1,2,3,4,5,6,7,8,9);
$data2 = array(1,2,3,4,5,6,7,8,9);
   foreach ($data1 as $x) {
     if ($x == 7) {
       break;
     }
   foreach ($data2 as $y) {
        printf("%02d ", $x * $y);
        }
      echo "<br>";
}

?>
