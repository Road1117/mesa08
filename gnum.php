<?php
    //question
    function createAnswer($n){
        //shuffle
        $poker=range(0,9);
        shuffle($poker);
        $ret = '';
        for ($i=0;$i<$n;$i++){
            $ret .= $poker[$i];
        }
        return $ret;
    }
    $anser = createAnswer(3);
?>
<form>
    <input name="guess">
    <input type="submit" value="猜">
</form>
