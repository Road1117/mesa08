<?php
header('content-Type: image/png');

$imgT = imagecreate(200,200);
$imgS = imagecreatefrompng("./upload/456.png");

$imgSW = imagesx($imgS); $imgSH = imagesy($imgS);
//echo "{$imgSW}X{$imgSH}";
if($imgSH > $imgSW){
    $imgTH = 200;
    $imgTW = $imgSW * $imgTH / $imgSH ;
}else{
    $imgTW = 200;
    $imgTH = $imgSH * $imgTW / $imgSW ;
}
//echo "{$imgSW}X{$imgSH}";
//echo "{$imgTW}X{$imgTH}";
$white = imagecolorallocate($imgT,255,255,255);
imagefilledrectangle($imgT,0,0,200,200,$white);
imagecopyresized($imgT,$imgS,0,0,0,0,
    $imgTW,$imgTH,$imgSW,$imgSH);

imagejpeg($imgT);

imagedestroy($imgS);
imagedestroy($imgT);