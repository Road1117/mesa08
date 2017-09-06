<?php
    if(!isset($_GET['filename']))
        header("location:brad30");
    $filename = $_GET['filename'];
    $content = $_GET['content'];
    $fp = fopen("./dir2/{$filename}",'w');
    fwrite($fp, $content);
    fclose($fp);

    header("location: ./dir2/{$filename}");