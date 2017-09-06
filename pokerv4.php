<?php
    //1. 洗牌
    $poker=range(0,51);
    shuffle($poker);

    //2. 發牌＝>4
    foreach ($poker as $k =>$v) {
        $players[$k%4][(int)($k/4)] = $v;
    }

    //3. 攤牌(理牌)
    $patterns = array(
        '<span style="color:black;">&spades;</span>',
        '<span style="color:red;">&hearts;</span>',
        '<span style="color:red;">&diams;</span>',
        '<span style="color:black;">&clubs;</span>',);
    $values = array('A','2','3','4','5','6','7','8','9','10','J','Q','K');
    echo '<table border="1" width="100%" style="color:blue;">';
    foreach ($players as $player){
        sort($player);
        echo '<tr>';
        foreach ($player as $card){
            echo '<td>';
            $pattern =(int)($card / 13);
            $value = $card % 13;
            echo "{$patterns[$pattern]}{$values[$value]}";
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
?>