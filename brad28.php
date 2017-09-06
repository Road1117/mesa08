<?php
//    $fp = fopen("./dir1/test.json",'r');
    $fp = fopen("http://data.tycg.gov.tw/api/v1/rest/datastore/27d2edc9-890e-4a42-bcae-6ba78dd3c331?format=csv",'r');


    $line = fgets($fp);
    $line = fgets($fp);

    $row = explode(',',$line);
    foreach ($row as $v){
        echo "{$v}<br>";
    }