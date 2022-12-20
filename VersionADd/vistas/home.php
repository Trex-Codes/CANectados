<!-- es el mismo catalogo.php -->
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

    <!-- import module prompt alerts -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <style type="text/css">
nav ul{
    width: 100%;
    float: right;
    padding-right: 20px;
    background: #a8d0db;
}
nav ul li{
    
    display: inline-block;
    line-height: 80px;
    margin: 0 5px;
}
.comments{
        transition: background-color .5s;
        text-decoration: none;
        color:black
        }

.comments:hover {
        color: white;
        }
nav ul li a{
    color: rgb(0, 0, 0);
    font-size: 18px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
}
li a.active, li a:hover{
    color: #1883ba;
    transition: .5s;

}


div > * {
    margin: 0 auto;
}

img {
    margin-right: 20px;
}

.bdata > * {
    font-size: 1rem;
}
p{
    font-size: 0.5rem;
}
h1.welcome {
    font-size: 30px;
}

.botones {
    font-family: 'Patrick Hand', cursive;
    transition: background-color .5s;
    text-decoration: none;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0;

    margin-top: 30px;
}

img {
    height: 217px;
    height: 316px;
}

.nexp {
    border: 3px dashed black;
}
.Comentario{
    color: #ffffff;
    font-family: 'Patrick Hand', cursive;
    background-color: #1883ba;
    border: 2px solid #0016b0;
    border-radius: 20px;
    padding:5px;
    height:100px;
    width: 400px;
    resize: none;
}
::placeholder { color: white; }

.publicar{
    margin: 0px;
    font-family: 'Patrick Hand', cursive;
    transition: background-color .5s;
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0;
    
    margin-top:40px;
}
.publicar:hover{
    color: #1883ba;
    background-color: #ffffff;
  }

  @media screen and (max-width: 1080px){
      
    header{
        font-size:1.5rem;
    }
    footer{
        font-size:1.3rem;
    }
    #rigth{
        width:100%;
    }
    img{
        height: 217px;
    }
    .comentario{
        width:80%;
    }
}

.msgComment {
    background: #2ec32b;
    font-size: 1.5rem;


    </style>
</head>

<body>
		<div class="container-fluid">
        <article>
            <header id="Encabezado" class="header2">
                <h7 id="titulo">CANectados</h7>
            </header>


            <section>

                <nav>
                    <ul>
                        <li><h1 class="Welcome">Bienvenido(a) <?php echo $user->getNombre(); ?></h1></li>
                        <li><p class="close-session"><a href="includes/logout.php">Cerrar sesión </a></p></li>
                    </ul>
                </nav>  
                <?php 
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


                            $conexion = new mysqli($servidor, $user, $password, $db);


                            if($conexion -> connect_error) {
                                die ("Conexion fallida" . " " . $conexion -> connect_error);
                            } else {
                                // echo "Conexion Exitosa" . "<br>";
                            }
                        ?>

                    <div id="rigth" class="nexp">

                       <?php    
                    $sql = "SELECT * FROM libros where idLibros = 1";
                    $query = mysqli_query($conexion,$sql);
                    $mostrar = mysqli_fetch_array($query); ?>
                    <article>
                    <aside class="content-info">
                        <img src="https://i.calameoassets.com/160316184200-eed4ea8c949fc7b74c012b9a9b67fbae/large.jpg">
                    </aside>
                    <div class="bdata"> 
                       <p>Nombre: <?php echo $mostrar[1] ?></p>
                        <p>Autor: <?php echo $mostrar[2] ?></p>
                        <p>Género: <?php echo $mostrar[3] ?></p>
                        <p>Edad recomendada: De 6 a 8 años</p>
                        <p>Número de páginas: <?php echo $mostrar[4] ?></p>
                        <button class="botones"><a href="https://drive.google.com/uc?export=download&id=1K-cBlcFJRu-BXT9l6KJCe8dnkMtAibud">Descargar</a></button>
                    </div>
                    <br>
                    <br>
                    <textarea id="comment" class="Comentario" placeholder="Escribe un comentario" name="Comentario"></textarea>
                    <br>
                        <button name="btnPublish" type="button" class="publicar" id="publicar" onclick="messgaShow()" >Publicar</button>
                        <script type="text/javascript">

                            function messgaShow () {
                                swal("Mensaje enviado correctamente!");
                                document.getElementById('comment').value = "";
                            }
                        </script>
                    </article>
                </div>
                   <div id="rigth" class="nexp">
                       <?php    
                    $sql = "SELECT * FROM libros where idLibros = 2";
                    $query = mysqli_query($conexion,$sql);
                    $mostrar = mysqli_fetch_array($query); ?>
                    <article>
                    <aside class="content-info">
                        <img src="https://www.uniminutoradio.com.co/wp-content/uploads/2019/08/Satanas-Mario-Mendoza.jpg">
                    </aside>
                    <div class="bdata"> 
                        <p>Nombre: <?php echo $mostrar[1] ?></p>
                        <p>Autor: <?php echo $mostrar[2] ?></p>
                        <p>Género: <?php echo $mostrar[3] ?></p>
                        <p>Edad recomendada: 18 años</p>
                        <p>Número de páginas: <?php echo $mostrar[4] ?></p>
                        <button class="botones"><a href="https://drive.google.com/uc?export=download&id=1hkwZyU36OLtGs3olD2UV85Gg1Yclog_2">Descargar</a></button>
                    </div>
                    <br>
                    <br>
                    <textarea id="comment2" class="Comentario" placeholder="Escribe un comentario" name="Comentario"></textarea>
                    <br>
                    <button name="btnPublish" type="submit" class="publicar" id="publicar" onclick="messgaShow2()" >Publicar</button>
                      <script type="text/javascript">

                            function messgaShow2 () {
                                swal("Mensaje enviado correctamente!");
                                document.getElementById('comment2').value = "";
                            }
                        </script>
                    </article>
                </div>

                 <div id="rigth" class="nexp">
                       <?php    
                    $sql = "SELECT * FROM libros where idLibros = 3";
                    $query = mysqli_query($conexion,$sql);
                    $mostrar = mysqli_fetch_array($query); ?>
                    <article>
                    <aside class="content-info">
                        <img src="https://lucasfh1976.files.wordpress.com/2018/12/hamlet.jpg?w=220&h=351s" alt="">
                    </aside>
                    <div class="bdata"> 
                       <p>Nombre: <?php echo $mostrar[1] ?></p>
                        <p>Autor: <?php echo $mostrar[2] ?></p>
                        <p>Género: <?php echo $mostrar[3] ?></p>
                        <p>Edad recomendada: De 14 años en adelante</p>
                        <p>Número de páginas: <?php echo $mostrar[4] ?></p>
                        <button class="botones"><a href="https://drive.google.com/uc?export=download&id=1uLtiOIfASDHnBAP5n1eV3WR6wrdLxvJE">Descargar</a></button>
                    </div>
                    <br>
                    <br>
                    <textarea id="comment3" class="Comentario" placeholder="Escribe un comentario" name="Comentario"></textarea>
                    <br>
                    <button name="btnPublish" type="button" class="publicar" id="publicar" onclick="messgaShow3()" >Publicar</button>
                     <script type="text/javascript">

                            function messgaShow3 () {
                                swal("Mensaje enviado correctamente!");
                                document.getElementById('comment3').value = "";
                            }
                        </script>
                    </article>
                </div>

                 <div id="rigth" class="nexp">
                       <?php    
                    $sql = "SELECT * FROM libros where idLibros = 4";
                    $query = mysqli_query($conexion,$sql);
                    $mostrar = mysqli_fetch_array($query); ?>
                    <article>
                    <aside class="content-info">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/91MW2eeaRSL.jpg" alt="">
                    </aside>
                    <div class="bdata"> 
                       <p>Nombre: <?php echo $mostrar[1] ?></p>
                        <p>Autor: <?php echo $mostrar[2] ?></p>
                        <p>Género: <?php echo $mostrar[3] ?></p>
                        <p>Edad recomendada: De 6 a 8 años</p>
                        <p>Número de páginas: <?php echo $mostrar[4] ?></p>
                        <button class="botones"><a href="https://drive.google.com/uc?export=download&id=1v6ynxPGU7X_94SMgbz3IYIz24pdEPDVE">Descargar</a></button>
                    </div>
                    <br>
                    <br>
                    <textarea id="comment4" class="Comentario" placeholder="Escribe un comentario" name="Comentario"></textarea>
                    <br>
                   <button name="btnPublish" type="button" class="publicar" id="publicar" onclick="messgaShow4()" >Publicar</button>
                      <script type="text/javascript">

                            function messgaShow4 () {
                                swal("Mensaje enviado correctamente!");
                                document.getElementById('comment4').value = "";
                            }
                        </script>
                    </article>
                </div>

                 <div id="rigth" class="nexp">
                       <?php    
                    $sql = "SELECT * FROM libros where idLibros = 5";
                    $query = mysqli_query($conexion,$sql);
                    $mostrar = mysqli_fetch_array($query); ?>
                    <article>
                    <aside class="content-info">
                        <img src="https://sinoa.li/media/k2/items/cache/74d28cfe90316470c8d90ef7118631f8_M.jpg" alt="">
                    </aside>
                    <div class="bdata"> 
                       <p>Nombre: <?php echo $mostrar[1] ?></p>
                        <p>Autor: <?php echo $mostrar[2] ?></p>
                        <p>Género: <?php echo $mostrar[3] ?></p>
                        <p>Edad recomendada: De 15 a 18 años  </p>
                        <p>Número de páginas: <?php echo $mostrar[4] ?></p>
                        <button class="botones"><a href="https://drive.google.com/uc?export=download&id=1gstb4-3DqLpsUWJbw7gCYjgjSpotU0KJ">Descargar</a></button>
                    </div>
                    <br>
                    <br>
                    <textarea id="comment5" class="Comentario" placeholder="Escribe un comentario" name="Comentario"></textarea>
                    <br>
                    <button name="btnPublish" type="button" class="publicar" id="publicar" onclick="messgaShow5()" >Publicar</button>
                    <script type="text/javascript">

                            function messgaShow5 () {
                                swal("Mensaje enviado correctamente!");
                                document.getElementById('comment5').value = "";
                            }
                        </script>
                    </article>
                </div>

                 <div id="rigth" class="nexp">
                       <?php    
                    $sql = "SELECT * FROM libros where idLibros = 6";
                    $query = mysqli_query($conexion,$sql);
                    $mostrar = mysqli_fetch_array($query); ?>
                    <article>
                    <aside class="content-info">
                        <img src="https://tiendateatral.com/15101/libro-fundamentacion-de-la-metafisica-de-las-costumbres-immanuel-kant.jpg">
                    </aside>
                    <div class="bdata"> 
                       <p>Nombre: <?php echo $mostrar[1] ?></p>
                        <p>Autor: <?php echo $mostrar[2] ?></p>
                        <p>Género: <?php echo $mostrar[3] ?></p>
                        <p>Edad recomendada: 18 años</p>
                        <p>Número de páginas: <?php echo $mostrar[4] ?></p>
                        <button class="botones"><a href="https://drive.google.com/uc?export=download&id=1WJapOPIgWvvEZtmxH3gkV4DH-GwMPlA2">Descargar</a></button>
                    </div>
                    <br>
                    <br>
                    <textarea id="comment6" class="Comentario" placeholder="Escribe un comentario" name="Comentario"></textarea>
                    <br>
                    <button name="btnPublish" type="button" class="publicar" id="publicar" onclick="messgaShow6()" >Publicar</button>

                      <script type="text/javascript">

                            function messgaShow6 () {
                                swal("Mensaje enviado correctamente!");
                                document.getElementById('comment6').value = "";
                            }
                        </script>
                    </article>
                </div>

                 <div id="rigth" class="nexp">
                       <?php    
                    $sql = "SELECT * FROM libros where idLibros = 7";
                    $query = mysqli_query($conexion,$sql);
                    $mostrar = mysqli_fetch_array($query); ?>
                    <article>
                    <aside class="content-info">
                        <img src="https://i.pinimg.com/originals/51/52/4c/51524c59a93d67a370dd58b6a66e6dbe.jpg" alt="">
                    </aside>
                    <div class="bdata"> 
                       <p>Nombre: <?php echo $mostrar[1] ?></p>
                        <p>Autor: <?php echo $mostrar[2] ?></p>
                        <p>Género: <?php echo $mostrar[3] ?></p>
                        <p>Edad recomendada: De 14 años en adelante</p>
                        <p>Número de páginas: <?php echo $mostrar[4] ?></p>
                        <button class="botones"><a href="https://drive.google.com/uc?export=download&id=1kCL4xazVdVcyQ6cST5CfQggBtnULkT49">Descargar</a></button>
                    </div>
                    <br>
                    <br>
                    <textarea id="comment7" class="Comentario" placeholder="Escribe un comentario" name="Comentario"></textarea>
                    <br>
                    <button name="btnPublish" type="button" class="publicar" id="publicar" onclick="messgaShow7()" >Publicar</button>

                     <script type="text/javascript">

                            function messgaShow7 () {
                                swal("Mensaje enviado correctamente!");
                                document.getElementById('comment7').value = "";
                            }
                        </script>
                    </article>
                </div>

                 <div id="rigth" class="nexp">
                       <?php    
                    $sql = "SELECT * FROM libros where idLibros = 8";
                    $query = mysqli_query($conexion,$sql);
                    $mostrar = mysqli_fetch_array($query); ?>
                    <article>       
                    <aside class="content-info">
                        <img src="https://inmario.com/wp-content/uploads/elementor/thumbs/platon-ox9nex2nonf6n6utz0yj8aupbarkxr0uh5vzt751z4.jpg" alt="">
                    </aside>
                    <div class="bdata"> 
                       <p>Nombre: <?php echo $mostrar[1] ?></p>
                        <p>Autor: <?php echo $mostrar[2] ?></p>
                        <p>Género: <?php echo $mostrar[3] ?></p>
                        <p>Edad recomendada: 18 años</p>
                        <p>Número de páginas: <?php echo $mostrar[4] ?></p>
                        <button class="botones"><a href="https://drive.google.com/uc?export=download&id=1cxiszLwXgG03uNsoiActUv3Z-lJfBJ0P">Descargar</a></button>
                    </div>
                    <br>
                    <br>
                    <textarea id="comment8" class="Comentario" placeholder="Escribe un comentario" name="Comentario"></textarea>
                    <br>
                    <button name="btnPublish" type="button" class="publicar" id="publicar" onclick="messgaShow8()" >Publicar</button>

                     <script type="text/javascript">

                            function messgaShow8 () {
                                swal("Mensaje enviado correctamente!");
                                document.getElementById('comment8').value = "";
                            }
                        </script>
                    </article>
                </div>
            </section>
            <footer class="footer2">
                <a class="base" href="mailto:canectadosbog@gmail.com">¿Tienes problemas? da click aquí</a>
            </footer>
        </article>
    </div>
</body>
</html>