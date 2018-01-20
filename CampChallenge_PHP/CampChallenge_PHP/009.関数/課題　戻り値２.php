<?php

function make_profile(){
    $infos = array();
    $infos['ID'] = 96;
    $infos['name'] = '杉本元希';
    $infos['Birthday'] = '1978年11月14日';
    $infos['address'] = '神奈川県';
    return $infos;
  }
  $myprof = make_profile();
  echo $myprof['name'];
  echo $myprof['Birthday'];
  echo $myprof['address'];
