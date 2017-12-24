<?php

function myprofile() {
            $infos = array();
            $infos['name'] = '杉本元希';
            $infos['birthday'] = '1978/11/14';
            $infos['address'] = '神奈川';
            $infos['ID'] = '96';
            return $infos;
}

$myprof = myprofile();
echo $myprof['name'];
echo $myprof['birthday'];
echo $myprof['address'];
return;
echo $myprof['ID'];
