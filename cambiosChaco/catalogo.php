  <?php 

    // Conexion DB SQL (LOCALHOST)
    $servidor = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'canectados';

    $conexion = new mysqli($servidor, $user, $password, $db);


    if($conexion -> connect_error) {
        die ("Conexion fallida" . " " . $conexion -> connect_error);
    } else {
        // echo "Conexion Exitosa" . "<br>";
    }
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>CANectados</title>
    <meta charset="utf-8">
    <meta name="author" content="Alumnos 11 Colegio Antonio Nariño H.H. Corazonistas (Bogotá)">
    <meta name="description" content="Sitio interactivo creado con el fin de ser biblioteca virtual para toda la comunidad">
    <meta name="keywords" content="CANectados, Alumnos 11, Antonio Nariño H.H. Corazonistas">
    <link href="./bootstrap-5/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src= "./bootstrap-5/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Teko:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Patrick+Hand&family=Teko:wght@600&display=swap" rel="stylesheet">
    <style>
        table {
            border: 1px solid red;
            padding: 5px;
        }

        table tr td {
            border: 1px solid black;

            font-family: sans-serif;
            padding: 10px;
        }

        .itemSQL {
            font-weight: bold;
            color: #299748;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <article>
            <header id="Encabezado" class="header2">
                <h7 id="titulo">CANectados</h7>
            </header>
            <section>
                <div id="left" class="nexp">
                    <?php    
                    $sql = "SELECT * FROM libros where idLibros = 1";
                    $query = mysqli_query($conexion,$sql);
                    $mostrar = mysqli_fetch_array($query); ?>
                    <img src="">
                    <div class="bdata">
                        <a class="nombre" href="libro.php">Nombre: <?php echo $mostrar[2] ?></a>
                        <p>Autor: <?php echo $mostrar[3] ?></p>
                        <p>Género: <?php echo $mostrar[4] ?></p>
                        <p>Edad recomendada: </p>
                        <p>Número de páginas: <?php echo $mostrar[5] ?></p>
                        <p>Número de visitas: </p>
                    </div>
                </div>
                <div id="rigth" class="nexp">
                    <?php    
                    $sql = "SELECT * FROM libros where idLibros = 2";
                    $query = mysqli_query($conexion,$sql);
                    $mostrar = mysqli_fetch_array($query); ?>
                    <img>
                    <div class="bdata"> 
                        <a class="nombre" href="libro.php">Nombre: <?php echo $mostrar[2] ?></a>
                        <p>Autor: <?php echo $mostrar[3] ?></p>
                        <p>Género <?php echo $mostrar[4] ?></p>
                        <p>Edad recomendada: </p>
                        <p>Número de páginas: <?php echo $mostrar[5]; ?></p>
                        <p>Número de visitas: </p>
                    </div>
                </div>
                <div id="left" class="nexp">
                    <?php    
                    $sql = "SELECT * FROM libros where idLibros = 3";
                    $query = mysqli_query($conexion,$sql);
                    $mostrar = mysqli_fetch_array($query); ?>
                    <img>
                    <div class="bdata"> 
                        <a class="nombre" href="libro.php">Nombre: <?php echo $mostrar[2] ?></a>
                        <p>Autor: <?php echo $mostrar[3] ?></p>
                        <p>Género <?php echo $mostrar[4] ?></p>
                        <p>Edad recomendada: </p>
                        <p>Número de páginas: <?php echo $mostrar[5]; ?></p>
                        <p>Número de visitas: </p>
                    </div>
                </div>
                <div id="rigth" class="nexp">
                    <?php    
                    $sql = "SELECT * FROM libros where idLibros = 4";
                    $query = mysqli_query($conexion,$sql);
                    $mostrar = mysqli_fetch_array($query); ?>
                    <img>
                    <div class="bdata"> 
                        <a class="nombre" href="libro.php">Nombre: <?php echo $mostrar[2] ?></a>
                        <p>Autor: <?php echo $mostrar[3] ?></p>
                        <p>Género <?php echo $mostrar[4] ?></p>
                        <p>Edad recomendada: </p>
                        <p>Número de páginas: <?php echo $mostrar[5]; ?></p>
                        <p>Número de visitas: </p>
                    </div>
                </div>
                <div id="left" class="nexp">
                    <img>
                    <div class="bdata"> 
                        <a class="nombre" href="libro.php">Nombre</a>
                        <p>Autor</p>
                        <p>Género</p>
                        <p>Edad recomendada</p>
                        <p>Número de páginas</p>
                        <p>Número de visitas</p>
                    </div>
                </div>
                <div id="rigth" class="nexp">
                    <img>
                    <div class="bdata"> 
                        <a class="nombre" href="libro.php">Nombre</a>
                        <p>Autor</p>
                        <p>Género</p>
                        <p>Edad recomendada</p>
                        <p>Número de páginas</p>
                        <p>Número de visitas</p>
                    </div>
                </div>
                <div id="left" class="nexp">
                    <img>
                    <div class="bdata"> 
                        <a class="nombre" href="libro.php">Nombre</a>
                        <p>Autor</p>
                        <p>Género</p>
                        <p>Edad recomendada</p>
                        <p>Número de páginas</p>
                        <p>Número de visitas</p>
                    </div>
                </div>
                <div id="rigth" class="nexp">
                    <img>
                    <div class="bdata"> 
                        <a class="nombre" href="libro.php">Nombre</a>
                        <p>Autor</p>
                        <p>Género</p>
                        <p>Edad recomendada</p>
                        <p>Número de páginas</p>
                        <p>Número de visitas</p>
                    </div>
                </div>
                <div id="left" class="nexp">
                    <img>
                    <div class="bdata"> 
                        <a class="nombre" href="libro.php">Nombre</a>
                        <p>Autor</p>
                        <p>Género</p>
                        <p>Edad recomendada</p>
                        <p>Número de páginas</p>
                        <p>Número de visitas</p>
                    </div>
                </div>
                <div id="rigth" class="nexp">
                    <img>
                    <div class="bdata"> 
                        <a class="nombre" href="libro.php">Nombre</a>
                        <p>Autor</p>
                        <p>Género</p>
                        <p>Edad recomendada</p>
                        <p>Número de páginas</p>
                        <p>Número de visitas</p>
                    </div>
                </div>
                <div id="left" class="nexp">
                    <img>
                    <div class="bdata"> 
                        <a class="nombre" href="libro.php">Nombre</a>
                        <p>Autor</p>
                        <p>Género</p>
                        <p>Edad recomendada</p>
                        <p>Número de páginas</p>
                        <p>Número de visitas</p>
                    </div>
                </div>
                <div id="rigth" class="nexp">
                    <img>
                    <div class="bdata"> 
                        <a class="nombre" href="libro.php">Nombre</a>
                        <p>Autor</p>
                        <p>Género</p>
                        <p>Edad recomendada</p>
                        <p>Número de páginas</p>
                        <p>Número de visitas</p>
                    </div>
                </div>
            </section>
            <footer class="footer2">
                <a class="base" href="mailto:canectadosbog@gmail.com">¿Tienes problemas? da click aquí</a>
            </footer>
        </article>
    </div>
</body>
</html>

<?php 

?>