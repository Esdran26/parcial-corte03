<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD base de datos</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<link rel="stylesheet" href="css/estilos.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>

	<div class="contenido">
		<div class="ejercicio">
			<img src="img/logo.png" alt="Logo" >
			<br><br><br>
			<a href="consulta01.php" class="btn btn-info btn-block">Consulta Join 01</a>
			<br>
			<a href="consulta02.php" class="btn btn-success btn-block">Subconsulta 02</a>
			<br>
			<a href="consulta03.php" class="btn btn-dark btn-block">Consulta Join Agrupación</a>
			<br>
		</div> 
	</div>
	<!--select * from productos where prod_cat_id in (select cat_id from categorias where cat_nombre not like '%A%') and prod_pro_id ...-->

</body>
</html>