<?php 
include_once('conexion.php');

$sql = "SELECT prod_id, prod_nombre, prod_precio, cat_nombre, pro_nombre FROM proveedores JOIN productos ON pro_id=prod_pro_id JOIN categorias ON cat_id=prod_cat_id WHERE cat_nombre IN ('LACTEOS', 'PESCADOS')";
$selectSent = $pdo->prepare($sql);
$selectSent->execute();
$resultSelectSent = $selectSent->fetchAll();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" href="css/estilos.css">
    <title>Consulta con JOIN</title>
</head>
<body>

    <div class="contenido">
        <div class="container mt-3 mb-3 ejercicio" style="padding: 2rem;">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre Del Producto</th>
                        <th scope="col">Precio Del Producto</th>
                        <th scope="col">Nombre De La Categoría</th>
                        <th scope="col">Nombre Del Proveedor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        
                    foreach($resultSelectSent as $resultData) {
                        echo '<tr>';
                        echo '<th scope="row">'. $resultData['prod_id'] . '</th>';
                        echo '<td>' . $resultData['prod_nombre'] . '</td>';
                        echo '<td>' . $resultData['prod_precio'] . '</td>';
                        echo '<td>' . $resultData['cat_nombre'] . '</td>';
                        echo '<td>' . $resultData['pro_nombre'] . '</td>';
                        echo '</tr>';
                    }

                    ?>
                </tbody>
            </table>
            <a href="index.php" class="btn btn-info">Regresar</a>
        </div>
    </div>

</body>
</html>