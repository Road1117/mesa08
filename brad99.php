<table border="1" width="100%">
<?php
        for($k=0;$k<2;$k++){
            echo '<tr>';
            for ($j=2;$j<=5;$j++){
                $newj=$j+4*$k;

                if (($j+$k) % 2 ==0){
                    echo '<td bgcolor="#ff0000">';
                }else{
                    echo '<td bgcolor="#0000ff">';
                }

                for($i=1;$i<10;$i++){
                    $r=$newj*$i;
                    echo "{$newj} X {$i} = {$r}<br>";
                    }
                    echo '</td>';
                }
        echo '</tr>';}
?>
</table>