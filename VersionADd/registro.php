<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registro CANectados</title>
    <link rel="stylesheet" href="styles.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Teko:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Patrick+Hand&family=Teko:wght@600&display=swap" rel="stylesheet">

    <style>
    @media screen and (max-width: 1080px){
        .contenedor{
            padding-top: 24%;
            padding-bottom:24%;
        }
        #bienvenida{
            font-size: 12rem;
        }
        form>*{
            font-size: 3rem;
        form{
            width: 5%;
        }
        #redirex, #botones{
            height: 40px;
            width: 50%;
            font-size: 70px;
        }
        }
        
            body{
                background: #a8d0db;
            }
            section{
            box-sizing:border-box;
            padding-bottom: 191px;
            font-family: 'Patrick Hand', cursive;
            background: #a8d0db;
            text-align: center;
            padding-top: 191px;
            width: 100%;
            height: auto;
            }
            .botones{
            height: 80px;
            width: 50%;
            font-size: 40px}
            .redirex{
                font-size: 40px;
            }
    }        
    @media screen and (min-width: 353px){
        section{
            padding-top: 8%;
            padding-bottom: 8%;
        
        }
        }

        .botones {
                margin-top: 70px;
                
        }
        
        .error {
            background: #DC5454;

            font-size: 12px;
        }

        .correcto {
            background-color: #3B923D;
        }

        .error, .correcto {
             color: #fff;

            font-weight: bold;
            font-family: sans-serif;

            padding: 10px;
        }
        .redirex{
            transition: background-color .5s;
            text-decoration: none;
            color:black
        }

        .redirex:hover {
            color: white;
        }

    </style>
</head>
<body>

<?php 
 // Validacion de datos o formularios

        if(isset($_POST['submitInfo'])) {
            $nombreusuario = $_POST['NombreUsuario'];
            $EdadUsuario = $_POST['EdadUsuario'];
            $NicknameUsuario = $_POST['NicknameUsuario'];
            $passwordUsuario = $_POST['passwordUsuario'];
            $passwordUsuarioEncript = md5($passwordUsuario);
            $CorreoUsuario = $_POST['CorreoUsuario'];

            $Campos = array();

            if($nombreusuario == ""){
                    array_push($Campos, "El nombre no pude estar vacío");
                }

                if($EdadUsuario == "" ){
                    array_push($Campos, "La edad no puede estar vacía");
                }

                if($NicknameUsuario == ""){
                    array_push($Campos, "El correo no puede estar vacío");
                }

                if($passwordUsuario =="") {
                    array_push($Campos, "La contraseña no puede estar vacía");
                }

                if($CorreoUsuario == "") {
                    array_push($Campos, "El correo no puede estar vacío");
                }


                if (count($Campos) > 0) {
                    for ($i=0; $i < count($Campos); $i++) { 
                        echo "<aside class='error'>" . $Campos[$i] . "<br>";
                        echo "</aside>";
                    }   
                } else {
                    echo "<aside class='correcto'> Datos registrados correctamente </aside>";
                    
                    // Conexion DB SQL (LOCALHOST)
                    $servidor = 'localhost';
                    $user = 'root';
                    $password = '';
                    $db = 'id18815618_canectados';

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

                    // Insertar datos en tabla pruebaslibros db
                    $sql = "INSERT INTO usuarios (IDunico , Nombre, Edad, Password, User, Correo)
                                        VALUES (NULL, '$nombreusuario', '$EdadUsuario', '$passwordUsuarioEncript',  '$NicknameUsuario', '$CorreoUsuario')";


                    if ($conexion -> query($sql) === true) {
                        // echo "Datos insertados correctamente ";
                    } else {
                        die ("Error al insertar datos, verifique " . " " . $conexion -> error);
                    }
                }
            }
 ?>

 <header id="Encabezado">
        <h7 id="titulo">CANectados</h7>
    </header>
    <section class="contenedor">
        <h1 id="bienvenida">CANectados</h1>
        <article class="content">

            <form action="registro.php" method="post">

                <label for="Nombre">Nombre: </label>
                <input class="formulario" type="text" id="Nombre" name="NombreUsuario" placeholder="Nombre" >

                <label for="Edad">Edad: </label>
                <input class="formulario" type="number" id="Edad" name="EdadUsuario" placeholder="Edad" min="0" max="100" >

                <label for="Usuario">Nickname: </label>
                <input class="formulario" type="text" id="Usuario" name="NicknameUsuario" placeholder="Nombre de Usuario" >

                <label for="Contraseña">Contraseña: </label>
                <input class="formulario" type="password" id="password" name="passwordUsuario" placeholder="Contraseña" >

                <label for="Correo">Correo: </label>
                <input class="formulario" type="email" id="Correo" name="CorreoUsuario" placeholder="Correo electronico" >

                <input type="submit" class="botones" name="submitInfo" value="Registrarse">
            </form>
            <a class="redirex" type="button" href="index.php">Regresar</a>

        </article>
    </section>
    <footer>
        <a class="base" href="mailto:canectadosbog@gmail.com">¿Tienes problemas? da click aquí</a>
    </footer>  
   </body>
</html>
 