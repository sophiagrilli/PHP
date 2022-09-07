_<?php
    ini_set('display_errors', 1);
    ini_set('display_statup_errors', 1);
    error_reporting(E_ALL);


    ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de datos personales</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Formulario de datos personales</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="resultado.php" method="POST">
                    <div class="py-3">
                        <label for="txtNombre">Nombre</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                    </div>
                    <div class="py-3">
                        <label for="txtNombre">DNI</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control">
                    </div>
                    <div class="py-3">
                        <label for="txtNombre">Teléfono</label>
                        <input type="text" name="txtTelefono" id="txtTelefono" class="form-control">
                    </div>
                    <div class="py-3    ">
                        <label for="txtNombre">Edad</label>
                        <input type="text" name="txtEdad" id="txtEdad" class="form-control">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">
                            ENVIAR
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

</body>

</html>