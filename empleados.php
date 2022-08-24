_<?php
ini_set('display_errors', 1);
ini_set('display_statup_errors', 1);
error_reporting(E_ALL);

$aEmpleados = array();
$aEmpleados[] = array("dni" => 33323422, "nombre" => "David Garcia", "bruto" => 85000.30);
$aEmpleados[] = array("dni" => 40987432, "nombre" => "Ana del Valle", "bruto" => 90000);
$aEmpleados[] = array("dni" => 67123432, "nombre" => "Andres Perez", "bruto" => 100000);
$aEmpleados[] = array("dni" => 76435675, "nombre" => "Victoria Luz", "bruto" => 70000);

function calcularNeto($bruto)
{
    return $bruto - ($bruto * 0.17);
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de empleados</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado de empleados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Sueldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($aEmpleados as $empleado){ ?>
                            <tr>
                                <td><?php echo $empleado["dni"]; ?></td>
                                <td><?php echo mb_strtoupper( $empleado["nombre"]); ?></td>
                                <td>$<?php echo number_format ( $empleado["bruto"], 2, ",", ".") ?></td>
                            </tr>
                        <?php }?>    
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Cantidad de empleados activos: <?php echo count($aEmpleados); ?></p>
            </div>
        </div>
    </main>
</body>
</html>


