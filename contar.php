_<?php
ini_set('display_errors', 1);
ini_set('display_statup_errors', 1);
error_reporting(E_ALL);

//definicion
function contar($aArray){
    $contador = 0;
    foreach($aArray as $item){
        $contador++;
    }
    return $contador;
}

//uso
$aNotas = array(9, 8, 9.5, 4, 7, 8);

$aPacientes = array();
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.50,
);
$aPacientes[] = array(
    "dni" => "23.111.111",
    "nombre" => "Gonzalo Perez",
    "edad" => 66,
    "peso" => 79,
);
$aPacientes[] = array(
    "dni" => "34.123.123",
    "nombre" => "Juan Paz",
    "edad" => 30,
    "peso" => 67,
);
$aPacientes[] = array(
    "dni" => "43.334.234",
    "nombre" => "Lucia Fernandez",
    "edad" => 27,
    "peso" => 54,
);

?>