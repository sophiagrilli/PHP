<?php
ini_set('display_errors', 1);
ini_set('display_statup_errors', 1);
error_reporting(E_ALL);

$stock = 800;

if($stock > 0) {
    echo "Hay Stock";
} else {
    echo "No hay stock";
}
?>