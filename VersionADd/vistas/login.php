<!-- ingreso.php -->

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
        body{
            background: #a8d0db;
        }
        section{
            padding-top:14%;
            padding-bottom: 14%;
            box-sizing:border-box;
            font-family: 'Patrick Hand', cursive;
            background: #a8d0db;
            text-align: center;
            width: 100%;
            height: auto
            }
        
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

        .redirex{
            transition: background-color .5s;
            text-decoration: none;
            color:black
        }

        article {
            height: 20%;
            text-align: center;
        }

        .redirex:hover {
            color: white;
        }
        @media screen and (max-width: 1080px){
        .botones{
            width:80%;
        }
        section{
            padding-top:40%;
            padding-bottom:40%;
        }
        header{
            font-size:1.5rem;
        }
        footer{
            font-size:1.3rem;
        }
        #bienvenida{
            font-size: 5rem;
        }
        label{
            font-size: 1.5rem;
        }
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
                <form action="" method="post">

                    <?php 
                        if (isset($errorLogin)) {
                            echo "<p>" . $errorLogin . "</p>";
                    
                        }
                    ?>

                    <label for="Usuario">Usuario: </label>
                    <input class="formulario" type="text" id="Usuario" name="username" placeholder="Nombre de Usuario">

                    <label for="Contraseña">Contraseña: </label>
                    <input class="formulario" type="password" id="password" name="password" placeholder="Contraseña">

                    <input class="botones" name="submitInfo" type="submit" value="Ingresar">
                </form>

                    <a class="redirex" type="button" href="index.php">Regresar</a> <br>


            <!-- <button class="btnAdmin"><a href=".//infotablas.php">funcion Admin</a></button>-->
            </article>
        </section>
        <footer>
            <a class="base" href="mailto:canectadosbog@gmail.com">¿Tienes problemas? da click aquí</a>
        </footer> 
    </div>
</body>
</html>