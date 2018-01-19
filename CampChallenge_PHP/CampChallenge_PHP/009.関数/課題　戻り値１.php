<?php

function make_profile(){
    $infos = array();
    $infos['age'] = 39;
    $infos['name'] = '杉本元希';
    $infos['hobby'] = 'ゲーム';
    return true;
  }
  $myprof = make_profile();
  echo $myprof['name'];

  if($myprof==true){
    echo 'この処理は正しく実行できました';
  }else{
    echo '正しく実行できませんでした';
  }
