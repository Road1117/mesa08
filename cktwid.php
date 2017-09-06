<?php
if(isset($_GET['twid'])){
    $twid = $_GET['twid'];

    if (preg_match('/^[A-Z][1-2][0-9]{8}$/',$twid)){

        echo 'ok';
    }else{
        echo 'xx';
    }
}
?>
<form>
    <input name="twid" />
    <input type="submit" value="check" />
</form>
