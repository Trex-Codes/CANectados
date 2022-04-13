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

        section {
            height: 100%;
            padding: 0px;

            padding-bottom: 30px;
        }

        .botones {
                margin-top: 15px;
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
            $CorreoUsuario = $_POST['CorreoUsuario'];

            $Campos = array();

            if($nombreusuario == ""){
                    array_push($Campos, "El nombre no pude estar vacío");
                }

                if($EdadUsuario == "" ){
                    array_push($Campos, "La edad no puede estar vacío");
                }

                if($NicknameUsuario == ""){
                    array_push($Campos, "El correo no puede estar vacio");
                }

                if($passwordUsuario =="") {
                    array_push($Campos, "La contraseña no puede estar vacia");
                }

                if($CorreoUsuario == "") {
                    array_push($Campos, "El correo no puede estar vacio");
                }


                if (count($Campos) > 0) {
                    for ($i=0; $i < count($Campos); $i++) { 
                        echo "<aside class='error'>" . $Campos[$i] . "<br>";
                        echo "</aside>";
                    }   
                } else {
                    echo "<aside class='correcto'> Datos registrados correctamente </aside>";

                }



            // Conexion DB SQL
            $servidor = 'localhost';
            $user = 'root';
            $password = '';
            $db = 'canectados';

            // Insersion de datos en tabla MYSQL
            $conexion = new mysqli($servidor, $user, $password, $db);

            if($conexion -> connect_error) {
                die ("Conexion fallida" . " " . $conexion -> connect_error);
            } else {
                // echo "Conexion Exitosa" . "<br>";
            }

            // Insertar datos en tabla pruebaslibros db
            $sql = "INSERT INTO usuarios (idUsuarios, nombreUsuario, edadUsuario, passwordUsuario, nicknameUsuario, correoUsuario)
                                VALUES (NULL, '$nombreusuario', '$EdadUsuario', '$passwordUsuario', '$NicknameUsuario', '$CorreoUsuario')";

            if ($conexion -> query($sql) === true) {
                // echo "Datos insertados correctamente ";
            } else {
                die ("Error al insertar datos, verifique " . " " . $conexion -> error);
            }







    }
     ?>

    <header id="Encabezado">
        <h7 id="titulo">CANectados</h7>
    </header>
    <section>
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

                <input type="submit" class="botones" name="submitInfo" value="registrarse">
            </form>
        </article>
    </section>
    <footer>
        <a class="base" href="mailto:sebastianchmantilla@gmail.com">¿Tienes problemas? da click aquí</a>
    </footer>  
   </body>
</html>
 