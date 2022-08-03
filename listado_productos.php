<?php
ini_set('display_errors', 1);
ini_set('display_statup_errors', 1);
error_reporting(E_ALL);

$aProducto = array();
$aProductos[] = array(
    "nombre" => "Smart tv 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000
);
$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000
);
$aProductos[] = array(
    "nombre" => "Aire acondicionado Split Inverter frio/calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "5543299585AS",
    "stock" => 5,
    "precio" => 45000
);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="py-5">Listado de productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Stock</th>
                            <th>Precio</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $aProductos[0]["nombre"]; ?></td>
                            <td><?php echo $aProductos[0]["marca"]; ?></td>
                            <td><?php echo $aProductos[0]["modelo"]; ?></td>
                            <td><?php echo $aProductos[0]["stock"] > 10 ? "Hay Stock" : ($aProductos[0]["stock"] > 0 && $aProductos[0]["stock"] <= 10 ? "Poco Stock" : "No hay Stock"); ?></td>
                            <td><?php echo $aProductos[0]["precio"]; ?></td>
                            <td><button class="btn btn-primary">Comprar</button> </td>
                        </tr>
                        <tr>
                            <td><?php echo $aProductos[1]["nombre"]; ?></td>
                            <td><?php echo $aProductos[1]["marca"]; ?></td>
                            <td><?php echo $aProductos[1]["modelo"]; ?></td>
                            <td><?php echo $aProductos[1]["stock"] > 10 ? "Hay Stock" : ($aProductos[1]["stock"] > 0 && $aProductos[1]["stock"] <= 10 ? "Poco Stock" : "No hay Stock"); ?></td>
                            <td><?php echo $aProductos[1]["precio"]; ?></td>
                            <td><button class="btn btn-primary">Comprar</button> </td>
                        </tr>
                        <tr>
                            <td><?php echo $aProductos[2]["nombre"]; ?></td>
                            <td><?php echo $aProductos[2]["marca"]; ?></td>
                            <td><?php echo $aProductos[2]["modelo"]; ?></td>
                            <td><?php echo $aProductos[2]["stock"] > 10 ? "Hay Stock" : ($aProductos[2]["stock"] > 0 && $aProductos[2]["stock"] <= 10 ? "Poco Stock" : "No hay Stock"); ?></td>
                            <td><?php echo $aProductos[2]["precio"]; ?></td>
                            <td><button class="btn btn-primary">Comprar</button> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>