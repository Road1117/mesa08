<?php
    $p = array(1=>0,0,0,0,0,0);
    for($i=0;$i<6000;$i++){
        $point =rand(1,9);
        $p[$point>=7?$point-3:$point]++;
    }

    var_dump($p);
    echo'<hr>';
    foreach ($p as $key => $value){
    echo "{$key}點出現{$value}次<br>";
    };