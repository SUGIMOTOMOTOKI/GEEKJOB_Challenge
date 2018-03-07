<?php

$type = $_GET['type'];
switch(2) {
        case 1:
            $siwake = '商品種別は”雑貨”です。<br>';
            break;
        case 2:
            $siwake = '商品種別は”生鮮食品”です。<br>';
            break;
        case 3:
            $siwake = '商品種別は”その他”です。<br>';
            break;
        default:
            $siwake = '想定外です。';
            break;
}
echo $siwake;


$total = $_GET['total'];
$count = $_GET['count'];
  echo '総額は'.$total.'円です。<br>';
  echo '1個当たりの値段は'.$total/$count.'円です。<br>';

if(3000<=$total){
    echo 'ポイントは'.$total*0.04.'ポイントです。<br>';
  }elseif(5000<=$total){
    echo 'ポイントは'.$total*0.05.'ポイントです。<br>';
  }

?>
