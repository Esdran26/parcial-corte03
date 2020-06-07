<?php 
include_once('conexion.php');

$sqlJoinMin = "SELECT prod_nombre, prod_existencias, MIN(prod_precio) AS precioMinimo, cat_nombre, pro_nombre FROM proveedores JOIN productos ON pro_id=prod_pro_id JOIN categorias ON cat_id=prod_cat_id WHERE cat_nombre IN ('LACTEOS')";
$selectJoinMinSent = $pdo->prepare($sqlJoinMin);
$selectJoinMinSent->execute();
$resultSelectJoinMinSent = $selectJoinMinSent->fetchAll();

$sqlJoinMax = "SELECT prod_nombre, MAX(prod_existencias) AS existenciasMaximas, prod_precio, cat_nombre, pro_nombre FROM proveedores JOIN productos ON pro_id=prod_pro_id JOIN categorias ON cat_id=prod_cat_id WHERE cat_nombre IN ('PESCADOS')";
$selectJoinMaxSent = $pdo->prepare($sqlJoinMax);
$selectJoinMaxSent->execute();
$resultSelectJoinMaxSent = $selectJoinMaxSent->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" href="css/estilos.css">
    <title>Consulta Join Agrupación</title>
</head>
<body>
    <div class="contenido">
        <div class="">
            <div class="card  border-light mb-3" style="max-width: 18rem; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);">
                <div class="card-header" style="color: black;">Agrupación MIN</div>
                <div class="card-body" style="color: black;">
                    <h5 class="card-title">El producto con el menor precio de la categoría LACTEOS</h5>
                    <?php 
                        
                    foreach($resultSelectJoinMinSent as $resultDataMin) {
                        echo '<p class="card-text"  style="text-align: left;" ><b>Nombre del Producto:</b> ' . $resultDataMin['prod_nombre'] . '</p>';
                        echo '<p class="card-text"  style="text-align: left;"><b>Existencias del Producto:</b> ' . $resultDataMin['prod_existencias'] . '</p>';
                        echo '<p class="card-text"  style="text-align: left;"><b>Precio del Producto:</b> ' . $resultDataMin['precioMinimo'] . '</p>';
                        echo '<p class="card-text"  style="text-align: left;"><b>Nombre de la Categoría:</b> ' . $resultDataMin['cat_nombre'] . '</p>';
                        echo '<p class="card-text"  style="text-align: left;"><b>Nombre del Proveedor:</b> ' . $resultDataMin['pro_nombre'] . '</p>';
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
