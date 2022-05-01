<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login CANectados</title>
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
        section{
            box-sizing:border-box;
            padding-bottom: 191px;
            font-family: 'Patrick Hand', cursive;
            background: #a8d0db;
            text-align: center;
            padding-top: 191px;
            width: 100%;
            height: auto
}
    </style>
</head>
<body>
    <div class="container-fluid">
        <header id="Encabezado" class="header2">
            <h7 id="titulo">CANectados</h7>
        </header>
        <section>
            <h1 id="bienvenida">CANectados</h1>
            <article>
                <form action="ingreso.php" method="post">
                    <label for="Usuario">Usuario: </label>
                    <input class="formulario" type="text" id="Usuario" name="Usuario" placeholder="Nombre de Usuario o correo electronico">
                    <label for="Contraseña">Contraseña: </label>
                    <input class="formulario" type="password" id="password" name="password" placeholder="Contraseña">
                    <a class="botones" type="button" href="#">Ingresar</a>
                </form>
            </article>
            <a class="redirex" type="button" href="registro.php">Aún no tienes cuenta?, puedes crearla aquí</a>
        </section>
        <footer class="footer2">
            <a class="base" href="mailto:canectadosbog@gmail.com">¿Tienes problemas? da click aquí</a>
        </footer> 
    </div>
</body>
</html>