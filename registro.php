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

            $datos = array($nombreusuario, $EdadUsuario, $NicknameUsuario, $passwordUsuario, $CorreoUsuario);

            for ($i=0; $i < count($datos) ; $i++) { 
                echo $datos[$i] . "<br>";
            }



        }
     ?>
    <header id="Encabezado">
        <h7 id="titulo">CANectados</h7>
    </header>
    <section>
        <h1 id="bienvenida">CANectados</h1>
        <article>
            <form action="registro.php" method="post">

                <label for="Nombre">Nombre: </label>
                <input class="formulario" type="text" id="Nombre" name="NombreUsuario" placeholder="Nombre" required="">

                <label for="Edad">Edad: </label>
                <input class="formulario" type="number" id="Edad" name="EdadUsuario" placeholder="Edad" min="0" max="100" required="">

                <label for="Usuario">Nickname: </label>
                <input class="formulario" type="text" id="Usuario" name="NicknameUsuario" placeholder="Nombre de Usuario" required="">

                <label for="Contraseña">Contraseña: </label>
                <input class="formulario" type="password" id="password" name="passwordUsuario" placeholder="Contraseña" required="">

                <label for="Correo">Correo: </label>
                <input class="formulario" type="email" id="Correo" name="CorreoUsuario" placeholder="Correo electronico" required="">

                <input type="submit" class="botones" name="submitInfo" value="registrarse">
            </form>
        </article>
    </section>
    <footer>
        <a class="base" href="mailto:sebastianchmantilla@gmail.com">¿Tienes problemas? da click aquí</a>
    </footer>  
   </body>
</html>