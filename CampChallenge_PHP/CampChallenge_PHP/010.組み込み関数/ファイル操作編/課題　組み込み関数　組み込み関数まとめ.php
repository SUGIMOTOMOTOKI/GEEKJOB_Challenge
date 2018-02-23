<?php

$start_time=microtime(true);
$ss = "開始時間： ".date('Y-m-d H:i:s',$start_time)."\n";
$fp = fopen('sample.php', 'w');
if ($fp != false) {
    fwrite($fp, $ss);
    fclose($fp);
  }
if ($fp != false) {error_log("プログラム開始\n",3, 'sample.php');}

if ($fp != false) {error_log("プログラム終了\n",3, 'sample.php');}


$end_time=microtime(true);
$sn = "終了時間： ".date('Y-m-d H:i:s',$end_time);
$fp = fopen('sample.php', 'a');
if ($fp != false) {
    fwrite($fp, $sn);
    fclose($fp);
}

$fp = fopen('sample.php', 'r');
if($fp != false) {
   echo file_get_contents('sample.php');
}

?>
