<?php
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


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Listado de pacientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombre y Apellido</th>
                            <th>Edad</th>
                            <th>Peso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=0; $i < count($aPacientes); $i++){ ?>
                            <tr>
                                <td><?php echo $aPacientes[$i]["dni"]; ?></td>
                                <td><?php echo $aPacientes[$i]["nombre"]; ?></td>
                                <td><?php echo $aPacientes[$i]["edad"]; ?></td>
                                <td><?php echo $aPacientes[$i]["peso"]; ?></td>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </main>
</body>
</html>