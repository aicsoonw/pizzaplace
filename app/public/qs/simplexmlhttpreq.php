<?php
    $getHandler = $_GET['q'];

    if ($getHandler === 'a') {
        echo 'a passed';
    } elseif ($getHandler === 'undefined') {
        echo 'q was undefined';
    } elseif ($getHandler === 'null') {
        echo 'q was null';
    } else {
        echo "succ test";
    }
?>
