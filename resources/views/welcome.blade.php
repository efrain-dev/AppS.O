<!DOCTYPE html>
<html lang="en">
<head>

    <title>O.S.S</title>
    <!--

    Template 2106 Soft Landing

    http://www.tooplate.com/view/2106-soft-landing

    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="team" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/png" href="{{asset('imagenes/so.jpg')}}"/>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body>

<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">

        <span class="spinner-rotate"></span>

    </div>
</section>


<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="{{route('welcome')}}" class="navbar-brand">Bienvenido a O.S.S</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#home" class="smoothScroll">Home</a></li>
                <li><a href="#feature" class="smoothScroll">Noticias</a></li>
                <li><a href="#about" class="smoothScroll">About us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Saludame a- <span>info@outlook.com</span></a></li>
            </ul>
        </div>

    </div>
</section>


<!-- FEATURE -->
<section id="home" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-offset-3 col-md-6 col-sm-12">
                <div class="home-info">
                    <h3>Bienvenido a O.S.S</h3>
                    <h1>Aqui encontraras informacion en lo ultimo en tecnologia</h1>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- FEATURE -->
<section id="feature" data-stellar-background-ratio="0.5">
    <div class="container">

        <div class="col-md-12 col-sm-4">
            <div class="team-thumb">
                <img src="{{asset('imagenes/tarjeta_intel.jpg')}}" style="size: auto" class="d-block w-100" alt="...">
                <div class="team-info team-thumb-up">
                    <h5>Nuevas graficas de intel</h5>
                    <p style="color: black">La arquitectura gráfica Intel Xe será el nuevo intento de la compañía azul
                        para competir directamente contra AMD y NVIDIA en todos los segmentos. Intel ha priorizado esta
                        arquitectura inicialmente hacia el segmento de los gráficos integrados para portátiles, y los
                        primeros productos que la llevarán serán los procesadores Tiger Lake (Iris Xe Graphics) y los
                        chips DG1 dedicados para portátiles.</p>
                    <a href="https://hardzone.es/noticias/tarjetas-graficas/tarjetas-graficas-intel-xe-lanzamiento"
                       style="color: blue" target="_blank"> Mas informacion</a>
                    <link>

                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-4">
            <div class="team-thumb">
                <img src="{{asset('imagenes/ARM.jpeg')}}" style="size: auto" class="d-block w-100" alt="...">
                <div class="team-info team-thumb-up">
                    <h5>La compra de ARM por Nvidia es un antes y un después en la industria de los chips, pero esconde un mar de dudas</h5>
                    <p style="color: black">La pasada semana se anunciaban, el mismo día, dos grandes operaciones en la esfera tecnológica. Oracle amanecía el lunes con acuerdo por el TikTok estadounidense y Nvidia anunciaba a bombo y platillo la adquisición de ARM. Ninguna de ellas resulta en lo que cabría esperar en un primer momento: Oracle finalmente apunta a ser un mero proveedor para TikTok, dejando fuera toda compra –y su codiciado algoritmo por las restricciones impuestas desde China–, mientras que Nvidia parece adoptar el modelo de negocio de ARM, dando la sensación de que la comprada era ella.</p>
                    <a href="https://hipertextual.com/2020/09/nvidia-compra-arm-chips"
                       style="color: blue" target="_blank"> Mas informacion</a>
                    <link>

                </div>
            </div>
        </div>        <div class="col-md-12 col-sm-4">
            <div class="team-thumb">
                <div class="team-info team-thumb-up">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/S-NCGgLDz9A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                    </div>
                    <h2 style="align-items: center;">Un video bastante interesante sobre procesadores</h2>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- ABOUT -->
<section id="about" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class=" col-md-12 col-sm-12">
                <div class="section-title">
                    <h1>Somos un equipo profesional de la tecnologia</h1>
                </div>
            </div>

            <div class="col-md-3 col-sm-4">
                <div class="team-thumb">
                    <img src="{{asset('imagenes/foto_efrain.jpg')}}" class="img-responsive" alt="Catherine Soft">
                    <div class="team-info team-thumb-up">
                        <h2>Efrain de Leon</h2>
                        <small>CEO/Fundador</small>
                        <p>Cuenta con una experiencia en motivacion de su equipo y administrar sus recuersos</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-4">
                <div class="team-thumb">
                    <div class="team-info team-thumb-down">
                        <h2>Edwin Barrera</h2>
                        <small>Programador</small>
                        <p>Cuenta con una larga experiencia en programacion</p>
                    </div>
                    <img src="{{asset('imagenes/foto_edwin.jfif')}}" style="height: 45vh" class="img-responsive"
                         alt="Catherine Soft">
                </div>
            </div>

            <div class="col-md-3 col-sm-4">
                <div class="team-thumb">
                    <img src="{{asset('imagenes/foto_mynor.jfif')}}" class="img-responsive" alt="Catherine Soft">
                    <div class="team-info team-thumb-up">
                        <h2>Mynor Pinto</h2>
                        <small>Escritor Principal/Diseñador</small>
                        <p>Encargado en el manejo de las notas y su diseño.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="team-thumb">
                    <div class="team-info team-thumb-down">
                        <h2>Cesar Miron</h2>
                        <small>Experto en Marketing</small>
                        <p>Nuestro especialista en posicionamiento en la web.</p>
                    </div>
                    <img src="{{asset('imagenes/foto_cesar.jpg')}}" class="img-responsive" alt="Catherine Soft">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FOOTER -->
<footer id="footer" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="copyright-text col-md-12 col-sm-12">
                <div class="col-md-6 col-sm-6">
                    <p>Copyright &copy; 2020 O.S.S </p>
                </div>

                <div class="col-md-6 col-sm-6">
                    <ul class="social-icon">
                        <li><a href="https://www.facebook.com/cesarito.miron" class="fa fa-facebook-square" attr="facebook icon" target="_blank"></a></li>
                        <li><a href="https://soundcloud.com/lksinsgt/brinca-remix" class="fa fa-soundcloud" target="_blank"></a></li>
                        <li><a href="https://www.instagram.com/lksiins_/" class="fa fa-instagram" target="_blank"></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</footer>

<script>
    $('.carousel').carousel()
</script>
<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
