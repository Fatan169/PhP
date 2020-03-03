<?php

$arrnilai = array ("Ani" => 80, "Otim" => 90, "Ana" => 75, "Budi" => 85);
echo $arrnilai['Ani']; //80
echo $arrnilai['Otim']; //90

$arrnilai = array();
$arrnilai['Ami'] = 80;
$arrnilai['Asma'] = 95;
$arrnilai['Sri'] = 77;
$arrnilai['Ani'] = 80;
$arrnilai['Otim'] = 90;
echo $arrnilai['Asma']; //95
echo $arrnilai['Ami']; //80

echo " Ani =".$arrnilai['Ani'];
echo " Otim =" .$arrnilai['Otim'];
echo " Asma =" .$arrnilai['Asma'];
echo " Ami =" .$arrnilai['Ami'];
?>