<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Agregar datos a la tabla libros</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>nombreLibro	</td>
			<td>autorLibro</td>
			<td>generoLibro</td>
			<td>paginasLibro</td>
		</tr>
		<tr>
			<form action="addTablas.php" method="post">

				<td><input type="text" name="nombreLibro"></td>
				<td><input type="text" name="autorLibro"></td>
				<td><input type="text" name="generoLibro"></td>
				<td><input type="text" name="paginasLibro"></td>

		</tr>
	</table> <br>
		<input type="submit" name="enviardatos" value="Enviar datos">
			</form>

		<?php 

	 	// Validacion formularios

	 	if(isset($_POST['enviardatos'])) {

	 		$nombreLibro = $_POST['nombreLibro'];
	 		$autorLibro = $_POST['autorLibro'];
	 		$generoLibro = $_POST['generoLibro'];
	 		$paginasLibro = $_POST['paginasLibro'];


		 	// Conexion db SQL
			$servidor = 'localhost';
		 	$nombreusuario = 'root';
		 	$password = '';
		 	$db = 'pruebalibros';

		 	$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

		 	if($conexion -> connect_error) {
		 		die ("Conexion fallida" . " " . $conexion -> connect_error);
		 	} else {
		 		// echo "Conexion Exitosa" . "<br>";
		 	}

		 	// Insertar datos en tabla pruebaslibros db
		 	$sql = "INSERT INTO libros (nombreLibro, autorLibro, generoLibro, paginasLibro)
		 						VALUES ('$nombreLibro', '$autorLibro', '$generoLibro', '$paginasLibro')";

		 	if ($conexion -> query($sql) === true) {
		 		echo "Datos insertados correctamente ";
		 	} else {
		 		die ("Error al insertar datos, verifique " . " " . $conexion -> error);
	 		}

	 	}


// SE VINEEEEE CHAVALES




		 ?>
</body>
</html>