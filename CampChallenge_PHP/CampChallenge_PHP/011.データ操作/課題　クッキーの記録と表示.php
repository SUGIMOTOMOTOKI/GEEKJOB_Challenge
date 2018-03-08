<?php

// ユーザーのアクセス日時を保存する処理
// ユーザーの１回目の訪問
$access_time = date('Y年m月d日h時i分s秒');
setcookie("LastLoginDate", $access_time);

echo  $_COOKIE["LastLoginDate"]
?>
