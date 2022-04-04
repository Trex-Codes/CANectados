<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sitio web basico</title>
	<style type="text/css">

		h1 {
			text-align: center;
			font-weight: bolder;
		}

		p {
			font-weight: bolder;
			color: grey;
			font-family: sans-serif;
		}

		body {
			background: #B8B7ED;
		}

		form {
			border-radius: 20px;
			border: 1px solid black;


			padding: 10px 150px;
			display: inline-block;
		}

		form > * {
			border-radius 4px;
			border: 1px solid ghostwhite;
		}
	</style>
</head>
<body>

<h1>Formulario PHP</h1>

<form action="form.php" method="post">
	
	<p>Mail:</p>
	<input type="text" value="" name="mail" placeholder="mail">
	<p>Password:</p>
	<input type="password" value="" name="Password" placeholder="password">
	<p>Edad:</p>
	<input type="number" value="" name="edad" placeholder="edad" min="0" max="99">

	<br>
	<br>
	<br>

	<p>Color favorito: </p>
	<input type="checkbox" value="Black" name="color">BLack <br>
	<input type="checkbox" value="lightblue" name="color">lightblue <br>
	<input type="checkbox" value="aqua" name="color">aqua <br><br>
	<br>

	<input type="submit" value="Enviar datos">


</form>

<p class="sure">Comprubea los datos si estas seguro</p>
<p>Los datos estan right: <a href="final.html">Enviar todo</a></p>
<p>los datos estan wrong <a href="index.php">Revisar todo</a></p>


</body>
</html>