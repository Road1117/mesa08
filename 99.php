<?php
echo '<table border="1" width="100%">';
for ($k=2;$k<7;$k+=4){
    echo '<tr>';
    for ($j=$k;$j<$k+4;$j++) {
        switch ($j) {
            case 2:
            case 4:
            case 7:
            case 9:
                echo '<td style="background-color:#FF0000;">';
                break;
            case 3:
            case 5:
            case 6:
            case 8:
                echo '<td style="background-color:#0000FF;">';
                break;
    }
    for ($i = 1; $i < 10; $i++) {
        $r = $j * $i;
        echo "{$j} X {$i} = {$r}<br>";
    }
    echo '</td>';
}
}
echo '</table>';