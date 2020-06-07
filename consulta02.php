<?php 
include_once('conexion.php');

$sql = "SELECT * FROM productos WHERE prod_cat_id IN (SELECT cat_id FROM categorias WHERE cat_nombre LIKE '%CARNES%') AND prod_pro_id IN (SELECT pro_id FROM proveedores WHERE pro_representante LIKE '%A%')";
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
    <title>SubConsultas #1</title>
</head>
<body>

    <div class="contenido">
        <div class="container mt-3 mb-3 ejercicio" style="padding: 2rem;">
            <h1 style="text-align: center;">Productos</h1>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Existencias</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        
                    foreach($resultSelectSent as $resultData) {
                        echo '<tr>';
                        echo '<th scope="row">'. $resultData['prod_id'] . '</th>';
                        echo '<td>' . $resultData['prod_nombre'] . '</td>';
                        echo '<td>' . $resultData['prod_precio'] . '</td>';
                        echo '<td>' . $resultData['prod_existencias'] . '</td>';
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