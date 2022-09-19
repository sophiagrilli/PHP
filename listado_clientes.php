<?php
ini_set('display_errors', 1);
ini_set('display_statup_errors', 1);
error_reporting(E_ALL);

session_start();

if(!isset($_SESSION["listadoClientes"])){
    //si existe la variable de session listadoClientes asigno su contenido a aClientes
    $aClientes = $_SESSION["listadoClientes"];
} else {
    $aClientes = array();
}



if($_POST){
    //si hace click en Enviar, entonces:
    //asignamos en variables los datos que vienen del formulario
    $nombre = $_POST["txtNombre"];
    $dni = $_POST["txtDni"];
    $telefono = $_POST["txtTelefono"];
    $edad = $_POST["txtEdad"];

    //creamos un array que contendrá el listado de clientes
    $aClientes[] = array("nombre" => $nombre,
                        "dni" => $dni,
                        "telefono" => $telefono,
                        "edad" => $edad
    );
    //actualiza el contenido de variable de session
    $_SESSION["listadoClientes"] = $aClientes;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clientes</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Listado de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-2">
                <form action="" method="POST" class="form">
                    <div class="pb-3">
                        <label for="">Nombre:</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="">DNI:</label>
                        <input type="text" id="txtDni" name="txtDni" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="">Teléfono:</label>
                        <input type="text" id="txtTelefono" name="txtTelefono" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="">Edad:</label>
                        <input type="text" id="txtEdad" name="txtEdad" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <button type="submit" class="btn btn-primary">ENVIAR</button>
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-danger">ELIMINAR</button>
                        </div>
                    </div>
                </form>    
            </div>
            <div class="col-6 ms-5">
                <table class="table table-hover shadow border">
                    <thead>
                        <th>Nombre:</th>
                        <th>DNI:</th>
                        <th>Teléfono:</th>
                        <th>Edad:</th>
                    </thead>
                    <tbody>
                        <?php foreach ($aClientes as $cliente): ?>
                            <tr>
                                <td><?php echo $cliente["nombre"]; ?></td>
                                <td><?php echo $cliente["dni"]; ?></td>
                                <td><?php echo $cliente["telefono"]; ?></td>
                                <td><?php echo $cliente["edad"]; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>