<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registro CANectados</title>
    <link href="./bootstrap-5/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src= "./bootstrap-5/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Teko:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Patrick+Hand&family=Teko:wght@600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <style>
        section {
            height: 100%;
            padding-bottom: 20px;
            }

        .botones {
            margin-top: 15px;
            text-align: center;
        }
        section{
            box-sizing:border-box;
            padding-bottom: 98px;
            font-family: 'Patrick Hand', cursive;
            background: #a8d0db;
            text-align: center;
            padding-top: 98px;
            width: 100%;
            height: auto
        }
    </style>
</head>
<body>
    <div class="container-fluid">
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
    <header id="Encabezado" class="header2">
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
            <a class="redirex" type="button" href="ingreso.php">Ya tienes una cuenta?, Puedes iniciar sesión aquí</a>
        </article>
    </section>
    <footer class="footer2">
        <a class="base" href="mailto:canectadosbog@gmail.com">¿Tienes problemas? da click aquí</a>
    </footer>  
    </div>
</body>
</html>