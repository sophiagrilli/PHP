<?php
ini_set('display_errors', 1);
ini_set('display_statup_errors', 1);
error_reporting(E_ALL);


for ($i = 2; $i <= 100; $i+=2) {

    echo $i . "<br>";
    if ($i == 60){
        break;
    }
}
?>