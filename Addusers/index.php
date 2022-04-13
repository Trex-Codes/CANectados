<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario</title>
	<link rel="stylesheet" href="styles.css">

	<!-- Prerpos Prefixer -->
	<!-- <link rel="stylesheet" href="styles-dist.css"> -->
	<!-- Normalize css -->
	<!-- <link rel="stylesheet" href="normalize.css"> -->

	<!-- Open Graph Protocol (OGP) -->
	<meta property="og:title" content="styles">
	<meta property="og:type" content="styles.html">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<?php 

	# Validacion de formularios
<<<<<<< HEAD
	$GenerosLibros = array();
=======
>>>>>>> 158b28979577a2cdc9c46fae424c304ffed0a086

	if (isset($_POST['btnEnviar'])) {

		$nombreUsuario = $_POST['nombreUsuario'];
		$edadUsuario = $_POST['edadUsuario'];
		$passwordUsuario = $_POST['passwordUsuario'];
<<<<<<< HEAD
		$nicknameUsuario = $_POST['nicknameUsuario'];
		$correoUsuario = $_POST['correoUsuario'];
		$Checkbox_Generos = $_POST['opcion'];
		$nombreLibro = $_POST['nombreLibro'];
=======
		// $nicknameUsuario = $_POST['nicknameUsuario'];
		// $emailUsuario = $_POST['email'];
		// $generousuarioM = $_POST['generousuarioM'];
		// $generousuarioF = $_POST['generousuarioF'];
>>>>>>> 158b28979577a2cdc9c46fae424c304ffed0a086

		$formularios = array();

		// Formulario nombreUsuario
		if($nombreUsuario == ""){
			array_push($formularios, "El nombre no puede estar vacio ");
		}

		# Formulario edadUsuario
		if($edadUsuario == "" || $edadUsuario > 99 || $edadUsuario < 0) {
			array_push($formularios, "La edad debe ser un numero entre 0 y 99");
		}

		// Formulario passwordUsuario
		if($passwordUsuario == "" || $passwordUsuario > 10) {
			array_push($formularios, "la password tienen que ser 10 caracteres");
		}

<<<<<<< HEAD
		// Formulario nicknameusuario
		if($nicknameUsuario == "") {
			array_push($formularios, "El nickname no puede estar vacio");
		}

		// Formulario correoUsuario
		if($correoUsuario == "") {
			array_push($formularios, "el correo no puede estar vacio");
		}

		// Formulario GenerosLibros$
		if($Checkbox_Generos == "" || count($Checkbox_Generos) < 2) {
			array_push($formularios, "Seleccione por lo menos 2 generos");
		}


		if (count($formularios) > 0) {
					for ($i=0; $i < count($formularios); $i++) { 
						echo " $formularios[$i] " . "<br>";
					}
				} else {
					echo "<form> <div class='correcto'>
						Datos Enviados correctamente
							 </div> </div>";
				}

			// Validacion Checkbox 
			$GenerosLibros = '';

			if(isset($_POST['opcion'])) {

				foreach($_POST['opcion'] as $key) {
					$GenerosLibros = implode(',', $_POST['opcion']);
				}
			}	

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


		 	$cadena = "INSERT INTO libros SET nombreLibro='$nombreLibro', generoLibro='$GenerosLibros'";
		 	mysqli_query($conexion, $cadena);
		 	$id_insertado = mysqli_insert_id($conexion);

		 	echo $cadena; 
		 	echo "<hr>";

		 	foreach($_POST['opcion'] as $idOpcion)  {
		 		$consulta = "INSERT INTO relacioncategoria_libro SET IdCategoria='$idOpcion', idLibros='$id_insertado'";
		 		echo $consulta . " " . "<br>";
		 		mysqli_query($conexion, $consulta);
		 	}






		 // 	// Insertar tados en tabla usuarios db pruebalibros
		 // 	$sql = "INSERT INTO usuarios (nombreUsuario, edadUsuario, passwordUsuario, nicknameUsuario, correousuario, generousuario) 
			// 	 		VALUES ('$nombreUsuario', '$edadUsuario', '$passwordUsuario', '$nicknameUsuario', '$correoUsuario', '$GenerosLibros' )";


		 // 	if ($conexion -> query($sql) === true) {
		 // 		echo "Datos insertados correctamente ";
		 // 	} else {
		 // 		die ("Error al insertar datos, verifique " . " " . $conexion -> error);
	 		// }



=======

		if (count($formularios) > 0) {
					for ($i=0; $i < count($formularios); $i++) { 
						echo "<form> <div class='content'> <div class='error'>";
						echo "<li>" . $formularios[$i]. "</li> </div> </div>";
					}
				} else {
					echo "<form> <div class='correcto'>
							Datos Enviados correctamente";
							echo "</div> </div>";
				}

		// Conexion db SQL
>>>>>>> 158b28979577a2cdc9c46fae424c304ffed0a086


	}
	 ?>
		<form action="index.php" method="post">

	<div class="content">
			<h2>REGISTER HERE!</h2>

		<label for="NAME">YOUR NAME </label>
<<<<<<< HEAD
		<input type="text" name="nombreUsuario" class ="FormName" id="user1" placeholder="First name">

		<label for="AGE">AGE</label>
		<input type="number" name="edadUsuario" min="0" max="100">

		<label for="PASSWORD">PASSWORD <span>(max 10 lenght)</span></label>
		<input type="password" name="passwordUsuario" placeholder="Password">
=======
		<input type="text" name="nombreUsuario" class ="FormName" id="user1" placeholder="First name" value="<?php echo $nombreUsuario; ?>">

		<label for="AGE">AGE</label>
		<input type="number" name="edadUsuario" min="0" max="100" value="<?php echo $edadUsuario; ?>">

		<label for="PASSWORD">PASSWORD <span>(max 10 lenght)</span></label>
		<input type="password" name="passwordUsuario" placeholder="Password" value="<?php echo $passwordUsuario; ?>">
>>>>>>> 158b28979577a2cdc9c46fae424c304ffed0a086

		<label for="NICKNAME">NICKNAME</label>
		<input type="text" name="nicknameUsuario" placeholder="Nickname">

		<label for="EMAIL ADDRESS">EMAIL ADDRESS</label>
		<input type="text" name="correoUsuario" placeholder="Eg. example@email.com">

<<<<<<< HEAD
			<label for="GENDER">TYPE OF BOOK</label>

			<input type="text" name="nombreLibro" id="">
		<article>
			<label for=""><input type="checkbox" name="opcion[]" value="1">Aventura</label>
			<label for=""><input type="checkbox" name="opcion[]" value="2">ficcion</label>
			<label for=""><input type="checkbox" name="opcion[]" value="3">historico</label>
			<label for=""><input type="checkbox" name="opcion[]" value="4">policial</label>
			<label for=""><input type="checkbox" name="opcion[]" value="5">humor</label>
			<label for=""><input type="checkbox" name="opcion[]" value="6">fantastico</label>
			<label for=""><input type="checkbox" name="opcion[]" value="7">terror</label>

		</article>
=======
		<label for="GENDER">GENDER</label>

		<label for="M">M</label>
		<input type="checkbox" name="generousuarioM">

		<label for="F">F</label>
		<input type="checkbox" name="generousuarioF">
>>>>>>> 158b28979577a2cdc9c46fae424c304ffed0a086

		<input type="submit" value="Submit →" name="btnEnviar">
		</form>
	</div>
	
</body>
</html>

