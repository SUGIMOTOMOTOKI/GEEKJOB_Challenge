<?php

function suzi($i=2,$j=5,$data=false){
  if($data==false){
  echo $i*$j;
}elseif($data==true){
   $f = pow($i*$j,2);
   echo $f;
   }
}
 suzi($i=2,$j=5,$data=false);

?>
