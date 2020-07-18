<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Biotecnika - Electromedicina Aplicada</title>
        <!--LOGO-->
        <link href="img/BTK_mini_logo.png" type="image/x-icon" rel="icon" />
        <!--BOOTSTRAP CSS-->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!--CSS-->
        <link href="css/estilo.css" rel="stylesheet" type="text/css" />
        <!-- <link href="css/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <!--JQUERY-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--script src="js/jquery-1.12.4.min.js" type="text/javascript"></script-->
        <!--BOOTSTRAP JAVASCRIPT-->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!--JAVASCRIPT-->
        <script src="js/action.js" type="text/javascript"></script>
    </head>
    <body>
        <!--BARRA DE NAVEGACION FLOTANTE-->
        <nav class="navegacion" id="flotante">
            <ul>
                <li class="option"><a href="#encabezado" class="nav-button"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="option"><a href="#servicios" class="nav-button">Servicios</a></li>
                <li class="option"><a href="#galeria" class="nav-button">Galería</a></li>
                <li class="option"><a href="#equipo" class="nav-button">Equipo</a></li>
                <li class="option"><a href="#contacto" class="nav-button">Contacto</a></li>
            </ul>
        </nav>
        <!--BARRA DE ARRIBA-->
        <nav id="redes">
            <ul>
                <li><a href="http://www.facebook.com/biotecnikaARG" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
            </ul>
        </nav>
        <!--ENCABEZADO-->
        <header id="encabezado">
            <a href="index.php">
                <img src="img/biotecnika_logo_web.png" id="logo"/>
            </a>
        </header>
        <!--BARRA DE NAVEGACION-->
        <nav class="navegacion" id="menu">
            <ul>
                <li class="option"><a href="#encabezado" class="nav-button"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="option"><a href="#servicios" class="nav-button">Servicios</a></li>
                <li class="option"><a href="#galeria" class="nav-button">Galería</a></li>
                <li class="option"><a href="#equipo" class="nav-button">Equipo</a></li>
                <li class="option"><a href="#contacto" class="nav-button">Contacto</a></li>
            </ul>
        </nav>
        <!--CUERPO PRINCIPAL DE SECCIONES-->
        <div id="principal">
            <!--PRESENTACION-->
            <div id="presentacion" class="seccion">
                <!--CARRUSEL-->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                    </ol>
 
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img/biotecnika1920x870_1.png" />
                        </div>
                        <div class="item">
                            <img src="img/biotecnika1920x870_2.png" />                           
                        </div>
                    </div>
 
                    <!-- Controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div> 
            </div>
            <!--SERVICIOS-->
            <div id="servicios" class="seccion">
                <div class="titulo"><p>Servicios</p></div>
                <div class="descripcion">
                    <p><br />
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac nisi vestibulum, viverra enim vel, interdum ex. 
                    Nullam ut lectus tincidunt libero sodales dapibus. Maecenas quis lacus viverra, mollis enim non, sodales eros. 
                    Nullam vulputate arcu euismod nisi iaculis, euismod rutrum mi suscipit. Sed mattis tellus quis vulputate posuere. 
                    Aenean malesuada, ante nec egestas blandit, neque enim luctus lacus, in faucibus augue mi quis magna. Etiam non erat velit. 
                    Sed sed commodo magna. Maecenas ut dolor dui. Praesent convallis semper hendrerit. In in aliquam diam. 
                    Nunc viverra pretium tortor quis gravida. Sed suscipit luctus commodo. Phasellus gravida sed sapien at viverra. 
                    Curabitur sed mi tortor.
                    </p>
                </div>
            </div>
            <hr></hr>
            <!--GALERIA-->
            <div id="galeria" class="seccion">
                <div class="titulo"><p>Galería</p></div>
                <div class="descripcion">
                    <div id="expandida"><img src="img/image1.jpg" class="big"/></div>
                    <div id="carrusel">
                        <ul id="miniaturas">
                            <li><img src="img/image1.jpg" class="min" /></li>
                            <li><img src="img/image2.jpg" class="min" /></li>
                            <li><img src="img/image3.jpg" class="min" /></li>
                            <li><img src="img/image4.jpg" class="min" /></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr></hr>
            <!--EQUIPO-->
            <div id="equipo" class="seccion">
                <div class="titulo"><p>Equipo</p></div>
                <div class="descripcion">
                    <p><br />
                    Donec hendrerit dolor ut tempus tincidunt. Etiam id imperdiet risus, id ornare ipsum. Praesent ornare purus vel arcu pellentesque, 
                    in auctor arcu dictum. Quisque vel ultricies nisi, sit amet commodo mi. Quisque dapibus, enim at tempor imperdiet, lectus dui tempus ex, 
                    eget maximus lacus ipsum et ex. Nam in erat quis risus vestibulum lobortis et a nunc. Aliquam bibendum urna in nisi fermentum tincidunt. 
                    Curabitur sagittis tellus libero. Nunc blandit malesuada aliquam. Mauris vitae velit sit amet enim placerat varius ac sed lectus. 
                    Morbi eu placerat justo. Nunc faucibus magna vitae feugiat commodo. Aenean tincidunt velit in dui rutrum posuere. 
                    Phasellus tincidunt egestas neque, non faucibus erat convallis at. Nullam dictum pulvinar dolor vel consectetur. 
                    Nullam ut justo pulvinar purus tincidunt fringilla eget eu diam.
                    </p>
                </div>
            </div>
            <hr></hr>
            <!--CONTACTO-->
            <div id="contacto" class="seccion">
                <div class="titulo"><p>Contacto</p></div>
                <div class="descripcion">
                    <p><br />
                    <i class="fa fa-envelope" aria-hidden="true"></i>contacto@mail.com<br />
                    <i class="fa fa-phone-square" aria-hidden="true"></i>0351-155000000<br />
                    <a id="facebook" href="http://www.facebook.com/biotecnikaARG" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i>facebook.com/biotecnikaARG</a>
                    </p>
                    <div id="formulario">
                        <p>Dejanos tu mensaje:</p>
                        <!--form action="src/enviar_mensaje.ctrl.php" id="form_mensaje" method="POST"-->
                            <input type="text" name="nombre" id="nombre" placeholder="Nombre" />
                            <input type="text" name="email" id="email" placeholder="Correo Electrónico" /><br />
                            <input type="text" name="asunto" id="asunto" placeholder="Asunto" /><br />
                            <textarea name="mensaje" id="mensaje" placeholder="Mensaje" /></textarea><br />
                            <button type="submit" id="enviar">Enviar Mensaje</button>
                        <!--/form-->
                    </div>
                </div>
            </div>
            <!--PIE DE PAGINA-->
            <footer id="final"><p>Biotecnika | Cordoba, Argentina | 2016</p></footer>
        </div>
    </body>
</html>