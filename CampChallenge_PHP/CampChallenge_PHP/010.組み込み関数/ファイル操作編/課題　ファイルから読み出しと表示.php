<?php

$fp = fopen('課題　ファイルの書き出しと保存　test001.php', 'r');
$fp_txt = fgets($fp);
fclose($fp);
echo $fp_txt;

?>
