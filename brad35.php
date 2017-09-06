<?php
$rate = $_GET['rate'];
header('content-Type: image/jpeg');
$img = imagecreate(400,40);
$yellow = imagecolorallocate($img,255,255,0);
$red = imagecolorallocate($img,255,0,0);
imagefilledrectangle($img,0,0,400 ,40 ,$yellow);
imagefilledrectangle($img,0,0,(int)(400*$rate/100) ,40 ,$red);
imagejpeg($img);
imagedestroy($img);