<?php
    $a='104';
    switch ($a){
        case 1:
            echo 'a';
            break;
        case 10:
            echo 'b';
            break;
        case 100:
            echo 'c';
            break;
        default :
            echo 'Default';
        case 103:
            echo 'd';
            break;
    }
    echo "<br>Finish";