<?php

$num=1000;
while($num<=1000){
  echo $num/=2;
  if($num<=100){
    break;
  }
}
//1000を2で割り続け、100より小さくなったらループを抜ける処理
