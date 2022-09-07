<?php

function maximo($aVector) {
    $valorMaximo = 0;
    foreach ($aVector as $valor) {
        if($valorMaximo < $valor){
            $valorMaximo = $valor;
        }
    }
    return $valorMaximo;
}

$aNotas = array(8, 4, 5, 3, 9, 1);
$aSueldo = array(800.30, 400.87, 500.32, 400, 300.54, 1800, 200.34);
echo "La nota máxima es: " . maximo($aNotas) . "<br>";
echo "El sueldo máximo es: " . maximo($aSueldo) . "<br>";
?>