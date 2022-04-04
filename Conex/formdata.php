<?php  

$servidor = "localhost";
$nombreusuario = "root";
$password = "";
$db = "datos";


$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

if($conexion->connect_error){
	die("Conexión fallida: " . $conexion->connect_error);
}

$sql = "CREATE TABLE info (
	id INTEGER(5) AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(20) NOT NULL,
	edad INTEGER(2) NOT NULL
)";

if($conexion->query($sql) === true){
	echo "La tabla se creó correctamente...";
}else{
	die("Error al crear tabla: " . $conexion->error);
}








?>