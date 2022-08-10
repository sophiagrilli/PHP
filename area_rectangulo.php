_<?php
ini_set('display_errors', 1);
ini_set('display_statup_errors', 1);
error_reporting(E_ALL);

//definicion
function calcularAreaRec($base, $altura){
    return $base * $altura;
}

//uso
echo "El área es " . calcularAreaRec(100, 0.60). "<br>";
echo "El área es " . calcularAreaRec(800, 300);

?>