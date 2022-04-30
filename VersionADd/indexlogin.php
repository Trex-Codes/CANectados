<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">


.error {
    background: #DC5454;
    color: #fff;
    
    font-size: 12px;
    font-weight: bold;
    font-family: sans-serif;

    padding: 10px;
}


	</style>
</head>
<body>
</body>
</html>

<?php 	

// Programacion de sesiones y usuarios

include_once 'includes/user.php';
include_once 'includes/user_session.php';

$userSession = new UserSession();
$user = new User();


// validaciones 

if(isset($_SESSION['user'])) {
	// echo "ay sesion";
	$user->setUser($userSession->getCurrentUser());
    include_once 'vistas/home.php';

} else if(isset($_POST['username']) && isset($_POST['password'])){
		// echo "validacion de login";

		$userForm = $_POST['username'];
		$passForm = $_POST['password'];

		if ($user->userExists($userForm, $passForm)) {
			// echo "Usuario validado";

			// asignada la sesion
			$userSession->setCurrentUser($userForm); 
			$user->setUser($userForm);

			include_once 'vistas/home.php'; // file libros.php



		} else {
			 // Conexion DB SQL (LOCALHOST)
        $servidor = 'localhost';
        $user = 'root';
        $password = '';
        $db = 'canectados';

        // Data Hosting 000Webhost.com
        // $servidor = 'localhost';
        // $user ="id18815618_admindb";
        // $password ="IhdR8gSi%%jA[Gwn";
        // $db = "id18815618_canectados";

        // Insersion de datos en tabla MYSQL
        $conexion = new mysqli($servidor, $user, $password, $db);

        if($conexion -> connect_error) {
            die ("Conexion fallida" . " " . $conexion -> connect_error);
        } else {
            // echo "Conexion Exitosa" . "<br>";
        }


        // Consultar para verificar si datos existen 

        if(isset($_POST['submitInfo'])) {
            $usuario = $_POST['username'];
            $password = $_POST['password'];
            
            $validar = "SELECT * FROM usuarios WHERE nicknameUsuario = '$usuario' || passwordUsuario = '$password'";
            $validando = $conexion->query($validar);


            if ($validando->num_rows > 0) {
                // echo "Ya esta en uso el usuario";

            } else {
            	echo '<aside class="error">Nombre de usuario no existente, porfavor registar</aside>';
            }
        }

			// echo "nombre de usuario y/0 password incorrect";
			$errorLogin = 'Nombre de usuario y/o password es incorrecto';
			include_once 'vistas/login.php';
		}


} else {
	// echo "login";
	include_once 'vistas/login.php';
}

?>