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
		echo "Valudacion de login";

		$userForm = $_POST['username'];
		$passForm = $_POST['password'];

		if ($user->userExists($userForm, $passForm)) {
			echo "Usuvario validado";

			// asignada la sesion
			$userSession->setCurrentUser($userForm); 
			$user->setUser($userForm);

			include_once 'vistas/home.php';



		} else {
			// echo "nombre de usuario y/0 password incorrect";
			$errorLogin = 'Nombre de usuario y/o password es incorrecto';
			include_once 'vistas/login.php';
		}


} else {
	// echo "login";
	include_once 'vistas/login.php';
}
















?>