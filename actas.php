<?php
ini_set('display_errors', 1);
ini_set('display_statup_errors', 1);
error_reporting(E_ALL);


$aAlumnos = array();
$aAlumnos[] = array("nombre" => "Ana Valle", "notas" => array(7, 8));
$aAlumnos[] = array("nombre" => "Bernabe Paz", "notas" => array(5, 7));
$aAlumnos[] = array("nombre" => "Sebastian Aguirre", "notas" => array(6, 9));
$aAlumnos[] = array("nombre" => "Monica Ledesma", "notas" => array(8, 9));

function promediar($aNotas) {
    $sumaTotal = 0;
    foreach ($aNotas as $nota) {
        $sumaTotal += $nota;
    }
    return $sumaTotal / count($aNotas);
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actas</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Actas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <th>Alumno</th>
                        <th>Nota 1 </th>
                        <th>Nota 2</th>
                        <th>Promedio</th>
                    </thead>
                    <tbody>
                        <?php foreach($aAlumnos as $alumno) : ?>
                            <tr>    
                                <td><?php echo $alumno["nombre"]; ?></td>
                                <td><?php echo $alumno["notas"][0]; ?></td>
                                <td><?php echo $alumno["notas"][1]; ?></td>
                                <td><?php echo promediar($alumno["notas"]); ?></td>
                            </tr>
                        <?php endforeach; ?>    
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-12">
                        <p>Promedio de la cursada: <?php echo promediar($alumno["notas"]); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>