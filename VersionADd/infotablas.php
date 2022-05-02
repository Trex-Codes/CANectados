<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Agregar datos a la tabla libros</title>
	<style>

		body {
			margin: 20px;
		}
		
		table {
			width: 300px;
			height: 120px;
			border: 1px solid #000;
		}

		table tr {
			background-color: #F3A712;
			font-family: sans-serif;
			font-weight: bolder;
			text-align: center;
		}

		table tr td {
			padding: 10px;
		}

		table input {
			border: 1px solid #534D41;
			padding: 10px;
		}

		input[type='submit'] {
			background-color: #534D41;
			color: #fff;

			padding: 10px;
			border: 1px solid black;
			outline: none;
		}

		input[type='submit']:hover {
			background-color: #AFCBFF;
			transition: background-color .5s;
		}

		.textSend {
			background-color: #88EF43;
			display: block;
		}

		.textError {
			background-color: #F25757;
			display: block;
		}

	</style>
</head>
<body>
	<table>
		<tr>
			<td>nombreLibro	</td>
			<td>autorLibro</td>
			<td>generoLibro</td>
			<td>paginasLibro</td>
		</tr>
		<tr>
			<form action="infotablas.php" method="post">

				<td><input type="text" name="nombreLibro"></td>
				<td><input type="text" name="autorLibro"></td>
				<td><input type="text" name="generoLibro"></td>
				<td><input type="text" name="paginasLibro"></td>
		</tr>
	</table>

		<br>
		<input type="submit" name="enviardatos" value="Enviar datos">
	</form>

		<?php 

	 	// Validacion formularios

	 	if(isset($_POST['enviardatos'])) {

	 		$nombreLibro = $_POST['nombreLibro'];
	 		$autorLibro = $_POST['autorLibro'];
	 		$generoLibro = $_POST['generoLibro'];
	 		$paginasLibro = $_POST['paginasLibro'];


		 	// Conexion DB SQL (LOCALHOST)
			/*$servidor = 'localhost';
            $user = 'root';
            $password = '';
            $db = 'canectados';*/

			 // Data Hosting 000Webhost.com
            $servidor = 'localhost';
            $user ="id18815618_admindb";
            $password ="IhdR8gSi%%jA[Gwn";
            $db = "id18815618_canectados";

			$conexion = new mysqli($servidor, $user, $password, $db);

		 	if($conexion -> connect_error) {
		 		die ("Conexion fallida" . " " . $conexion -> connect_error);
		 	} else {
		 		// echo "Conexion Exitosa" . "<br>";
		 	}

		 	// Insertar datos en tabla pruebaslibros db
		 	$sql = "INSERT INTO Libros (nombre, autor, generoLibro, Numeropaginas)
		 						VALUES ('$nombreLibro', '$autorLibro', '$generoLibro', '$paginasLibro')";

		 	if ($conexion -> query($sql) === true) {
		 		echo "<p class='textSend'> Datos insertados correctamente </p>";
		 	} else {
		 		die ("<p class='textError'> Error al insertar datos </p> verifique " . " " . $conexion -> error);
	 		}
	 	}

// SE VINEEEEE CHAVALES
// POSTERIORMENTE SE HARA VALIDACION DE FORMULARIOS PARA CADA INPUT
		 ?>
</body>
</html>