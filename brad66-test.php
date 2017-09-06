<?php
$json = file_get_contents('http://localhost/dir1/test.json');
$root = json_decode($json);

$park = $root->parkingLots;

//var_dump($park);

foreach ($park as $data){
    echo "{$data->areaName} : {$data->parkName}";
    echo "<hr>";
}
