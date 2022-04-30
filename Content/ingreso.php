<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login CANectados</title>
    <link rel="stylesheet" href="styles.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Teko:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Patrick+Hand&family=Teko:wght@600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <style type="text/css">
        .btnAdmin {
            background-color: #5B95BE;
    
            margin-top: 20px;            
            padding: 10px;
            border: none;
        }

        .btnAdmin a {
            color: #fff;
            outline: none;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <header id="Encabezado">
            <h7 id="titulo">CANectados</h7>
        </header>
        <section>
            <h1 id="bienvenida">CANectados</h1>
            <article>
                <form action="ingreso.php" method="post">

                    <label for="Usuario">Usuario: </label>
                    <input class="formulario" type="text" id="Usuario" name="Usuario" placeholder="Nombre de Usuario">

                    <label for="Contraseña">Contraseña: </label>
                    <input class="formulario" type="password" id="password" name="password" placeholder="Contraseña">

                    <input class="botones" name="submitInfo" type="submit" value="Ingresar">
                </form>

                <button class="btnAdmin"><a href="tablasLibros.php">funcion Admin</a></button>
            </article>
        </section>
        <footer>
            <a class="base" href="mailto:canectadosbog@gmail.com">¿Tienes problemas? da click aquí</a>
        </footer> 
    </div>
    <?php 

        //  if(isset($_POST['submitInfo'])) {
        //     $InnerUsuario = $_POST['Usuario'];

        //     if ($InnerUsuario == "Admin" || $InnerUsuario == "admin") {
        //         header('Location: addTablas.php');
        //     }
        // }


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
            $usuario = $_POST['Usuario'];
            $password = $_POST['password'];
            
            $validar = "SELECT * FROM Usuarios WHERE Nickname = '$usuario' || Password = '$password'";
            $validando = $conexion->query($validar);


            if ($validando->num_rows > 0) {
                echo "Ya esta en uso el usuario";
            } else {
                echo "Usuario no Existente";
            }


        }
     ?>
</body>
</html>