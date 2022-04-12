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

	if (isset($_POST['btnEnviar'])) {

		$nombreUsuario = $_POST['nombreUsuario'];
		$edadUsuario = $_POST['edadUsuario'];
		$passwordUsuario = $_POST['passwordUsuario'];
		// $nicknameUsuario = $_POST['nicknameUsuario'];
		// $emailUsuario = $_POST['email'];
		// $generousuarioM = $_POST['generousuarioM'];
		// $generousuarioF = $_POST['generousuarioF'];

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


	}
	 ?>
		<form action="index.php" method="post">

	<div class="content">
			<h2>REGISTER HERE!</h2>

		<label for="NAME">YOUR NAME </label>
		<input type="text" name="nombreUsuario" class ="FormName" id="user1" placeholder="First name" value="<?php echo $nombreUsuario; ?>">

		<label for="AGE">AGE</label>
		<input type="number" name="edadUsuario" min="0" max="100" value="<?php echo $edadUsuario; ?>">

		<label for="PASSWORD">PASSWORD <span>(max 10 lenght)</span></label>
		<input type="password" name="passwordUsuario" placeholder="Password" value="<?php echo $passwordUsuario; ?>">

		<label for="NICKNAME">NICKNAME</label>
		<input type="text" name="nicknameUsuario" placeholder="Nickname">

		<label for="EMAIL ADDRESS">EMAIL ADDRESS</label>
		<input type="text" name="correoUsuario" placeholder="Eg. example@email.com">

		<label for="GENDER">GENDER</label>

		<label for="M">M</label>
		<input type="checkbox" name="generousuarioM">

		<label for="F">F</label>
		<input type="checkbox" name="generousuarioF">

		<input type="submit" value="Submit →" name="btnEnviar">
		</form>
	</div>
	
</body>
</html>

