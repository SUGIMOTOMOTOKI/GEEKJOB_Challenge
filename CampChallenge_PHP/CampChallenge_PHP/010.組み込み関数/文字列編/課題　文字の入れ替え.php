<?php

$search  = array("I","U");
$replace = array("い","う");
$target = "「きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます」<br>";
echo str_replace($search, $replace, $target);
?>
