<!-- validar que exista  -->
<!-- obtener usuario (nombre y username) -->

<?php 

	include_once 'db.php';
	
	class User extends DB {
		private $nombre;
		private $username;

		// Existe nombre y usuario
		public function userExists($user, $pass) {

			$md5pass = md5($pass);
			// $md5pass = ($pass);

	        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE nicknameUsuario = :user AND passwordUsuario = :pass');

	        $query->execute(['user' => $user, 'pass' => $md5pass]);

	        // Validacion de login
	        if($query->rowCount()){
	            return true;
	        }else{
	            return false;
	        }
		}


  		public function setUser($user){

	        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE nicknameUsuario = :user');

	        $query->execute(['user' => $user]);
	        
	         foreach ($query as $currentUser) {
            	$this->nombre = $currentUser['nombreUsuario'];
            	$this->usename = $currentUser['nicknameUsuario'];
        }
    }

    	public function getNombre(){
        	return $this->nombre;
    }
}


?>