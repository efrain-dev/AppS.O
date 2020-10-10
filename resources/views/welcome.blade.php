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
    <link rel="icon" type="image/png" href="{{asset('imagenes/so.jpg')}}" />

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

                <div class="carousel-item active">
                    <img src="{{asset('imagenes/tarjeta_intel.jpg')}}" style="height: 80vh" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-capitalize" style="color: black">
                        <h5>Nuevas graficas de intel</h5>
                        <p style="color: black">La arquitectura gráfica Intel Xe será el nuevo intento de la compañía azul para competir directamente contra AMD y NVIDIA en todos los segmentos. Intel ha priorizado esta arquitectura inicialmente hacia el segmento de los gráficos integrados para portátiles, y los primeros productos que la llevarán serán los procesadores Tiger Lake (Iris Xe Graphics) y los chips DG1 dedicados para portátiles.</p>
                        <a href="https://hardzone.es/noticias/tarjetas-graficas/tarjetas-graficas-intel-xe-lanzamiento" style="color: blue" target="_blank"> Mas informacion</a>
                        <link >

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
                    <img src="{{asset('imagenes/foto_edwin.jfif')}}" style="height: 45vh" class="img-responsive" alt="Catherine Soft">
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
                        <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
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
