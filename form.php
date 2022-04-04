<!-- Consultar datos al HTML -->

<?php 

$mail = $_POST['mail'];
$pass = $_POST['Password'];

$edad = $_POST['edad'];
$gen = $_POST['genero'];
$colr = $_POST['color'];


$salto = "<br>";

echo "mail: ", $mail, $salto;
echo "pass: ", $pass, $salto;
echo "edad: ", $edad, $salto;
echo "gen: ", $gen, $salto;
echo "colr: ", $colr, $salto;



include("conex/conexion.php");
include("conex/formdata.php");

?>
