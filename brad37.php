<?php
//header('content-Type: image/jpeg');
$img = imagecreatefromjpeg("./upload/test.jpeg");
$black = imagecolorallocate($img,255,255,255);
imagettftext($img,24,10,140,200,$black,
    "./font/fireflysung.ttf","中文測試");
imagejpeg($img,"./upload/brad.jpg");
imagedestroy($img);