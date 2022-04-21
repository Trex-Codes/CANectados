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
                    <input class="formulario" type="text" id="Usuario" name="Usuario" placeholder="Nombre de Usuario o correo electronico">
                    <label for="Contraseña">Contraseña: </label>
                    <input class="formulario" type="password" id="password" name="password" placeholder="Contraseña">
                    <a class="botones" type="button" href="#">Ingresar</a>
                </form>
            </article>
        </section>
        <footer>
            <a class="base" href="mailto:sebastianchmantilla@gmail.com">¿Tienes problemas? da click aquí</a>
        </footer> 
    </div>
</body>
</html>