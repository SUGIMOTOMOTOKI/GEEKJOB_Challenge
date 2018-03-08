<?php

$access_time = date('Y年m月d日h時i分s秒');
session_start();
echo  $_SESSION["LastLoginDate"] = "$access_time";
?>
