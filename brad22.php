<?php
    if (isset($_REQUEST['account']))
        header('location: brad19.php?error02');

    $account=$_REQUEST['account'];
    echo $account;
