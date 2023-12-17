<?php

    $i;

    if($_POST){
        $i = 1;
    }else {
        $i = 0;
    }

    switch($i) {
        default:
            include_once "controllers/mainController.php";
            break;
        case 1:
            include_once "controllers/downloadController.php";
            break;
    }

?>