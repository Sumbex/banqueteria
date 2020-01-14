<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Licidan</title>
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Sniglet&display=swap" rel="stylesheet">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- BAGUETTEBOX -->
    <link rel="stylesheet" type="text/css" href="css/baguetteBox.min.css">
    <!-- SCROLL REVEAL -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/main.css?version=0.3">
    <link rel="stylesheet" href="css/animate.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/licidan.png" width="150px" height="50px">
                <img src="img/cortar-con-tijeras.png" width="50px" height="50px">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link fromLeft" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fromLeft" href="#quienes">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fromLeft" href="#precios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fromLeft" href="#galeria">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fromLeft" href="#ubicacion">Ubicacion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fromLeft" href="#contact">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fromLeft" href="#redes">Redes Sociales</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Nombre PYME -->
    <section id="header">
        <div class="container">
            <h1 class="text-center tituloBorder" style="font-size: 3.5rem;">ACADEMIA & PELUQUERIA LICIDAN
                <img src="img/pelos-femeninos.png" width="70px" height="70px">
            </h1>
            <p class="text-center">Todo tipo de cortes de cabello y los mejores servicios para usted</p>
        </div>
    </section>

    <!-- HEADER -->
    <div class="container-fluid">
        <div id="carouselExampleCaptions" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/header2.jpg" class="d-block w-100 mx-auto" alt="...">
                </div>
                <div class="carousel-item">

                    <img src="img/header1.jpg" class="d-block w-100 mx-auto" alt="...">

                </div>
                <div class="carousel-item">
                    <img src="img/header3.jpg" class="d-block w-100" alt="...">
                </div>

    </nav> <br>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <!-- CARRUSEL -->
    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/carrusel_02.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/carrusel_01.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/carrusel_03.png" alt="Third slide">
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- QUIENES SOMOS -->
    <section id="quienes" class="my-5"> <br>
        <div class="container">
            <h1 class="text-center quienesBorder" style="font-size: 3rem;">
                <b>
                    ¿Quiénes Somos?
                    <img src="img/barberia.png" width="50px" height="50px">
                </b>
            </h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla corrupti dolorem cupiditate blanditiis
                temporibus magnam nesciunt officia officiis. Et, recusandae nulla. Rerum, reprehenderit saepe. Id nisi
                rem minima exercitationem cum maxime culpa, maiores quas eos aspernatur? Repellat, officiis a eius
                ducimus iste corporis totam assumenda magni esse earum. Corrupti, quisquam!</p><br>
        </div>
    </section>

    <!-- SERVICIOS -->
    <section id="precios" class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center tituloBorder" style="font-size: 3rem;"><br><b>Nuestros Servicios</b>
                        <img src="img/secador-de-pelo.png" width="50px" height="50px">
                    </h1>
                    <p>Una peluquería o barbería es un local donde se ofrecen varios servicios estéticos,
                        principalmente el corte de pelo, pero también suelen realizarse otros como afeitado,
                        depilado, manicura, pedicura, etc. Cuando se trata de muchos servicios diferentes
                        suele llamarse salón de belleza.</p>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="card card-servicios mb-3 col-md-12" id="dama">
                    <div class="row no-gutters">
                        <div class="col-md-5 col-lg-5">
                            <img src="img/header3.png" class="card-img mx-auto m-4 servicioImg" width="50px"
                                height="300px">
                        </div>
                        <div class="col-md-7 col-lg-7">
                            <div class="card-body">
                                <h1 class="card-title text-center quienesBorder">
                                    <b>
                                        <img src="img/cabello-mujer.png" class="mx-auto" width="50px" height="50px">
                                        Dama
                                    </b>
                                </h1>
                                <ul class="list-group list-group-flush">
                                    <li class="mx-4 my-2"><img src="img/tijeras.png" class="mx-3" width="30px"
                                            height="30px">Cortes Dama</li>
                                    <li class="mx-4 my-2"><img src="img/tijeras.png" class="mx-3" width="30px"
                                            height="30px">Balayage</li>
                                    <li class="mx-4 my-2"><img src="img/tijeras.png" class="mx-3" width="30px"
                                            height="30px">Ondulaciones Permanentes</li>
                                    <li class="mx-4 my-2"><img src="img/tijeras.png" class="mx-3" width="30px"
                                            height="30px">Mechas</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card card-servicios mb-3 col-md-6" id="varon">
                    <div class="row no-gutters">
                        <div class="col-md-5 col-lg-5">
                            <img src="img/galeria_03.png" class="card-img mx-auto m-4 servicioImg" width="50px"
                                height="300px">
                        </div>
                        <div class="col-md-7 col-lg-7">
                            <div class="card-body">
                                <h1 class="card-title text-center quienesBorder">
                                    <b>Varon
                                        <img src="img/cabello-masculino-de-formas-de-cabeza-y-cara.png" class="mx-auto"
                                            width="50px" height="50px">
                                    </b>
                                </h1>
                                <ul class="list-group list-group-flush">
                                    <li class="mx-4 my-2"><img src="img/tijeras.png" class="mx-3" width="30px"
                                            height="30px">Cortes varon</li>
                                    <li class="mx-4 my-2"><img src="img/tijeras.png" class="mx-3" width="30px"
                                            height="30px">Degradado</li>
                                    <li class="mx-4 my-2"><img src="img/tijeras.png" class="mx-3" width="30px"
                                            height="30px">Tinturas</li>
                                    <li class="mx-4 my-2"><img src="img/tijeras.png" class="mx-3" width="30px"
                                            height="30px">Visos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-servicios mb-3 col-md-5" id="niño">
                    <div class="row no-gutters">
                        <div class="col-md-5 col-lg-5">
                            <img src="img/galeria_04.png" class="card-img mx-auto m-4 servicioImg" width="50px"
                                height="300px">
                        </div>
                        <div class="col-md-7 col-lg-7">
                            <div class="card-body">
                                <h1 class="card-title text-center quienesBorder">
                                    <b>
                                        <img src="img/forma-de-pelo-de-nino.png" class="mx-auto" width="50px"
                                            height="50px">
                                        Niño
                                    </b>
                                </h1>
                                <ul class="list-group list-group-flush">
                                    <li class="mx-4 my-2"><img src="img/tijeras.png" class="mx-3" width="30px"
                                            height="30px">Cortes niño</li>
                                    <li class="mx-4 my-2"><img src="img/tijeras.png" class="mx-3" width="30px"
                                            height="30px">Degradado</li>
                                    <li class="mx-4 my-2"><img src="img/tijeras.png" class="mx-3" width="30px"
                                            height="30px">Tinturas</li>
                                    <li class="mx-4 my-2"><img src="img/tijeras.png" class="mx-3" width="30px"
                                            height="30px">Visos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- GALERIA -->
    <section id="galeria"> <br>
        <div class="container mb-4">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="info-one-h1 tituloBorder">Galeria
                        <img src="img/foto.png" class="mx-auto" width="50px" height="50px">

                    </h1>
                </div>
            </div>

            <div class="galeria1">
                <div class="row text-center">
                    <div class="col-md-3 img-hover-zoom mt-5">
                        <a href="img/galeria_02.jpg" style="text-decoration:none;color: black;">
                            <p class="p-header">ADMISION 2020</p>
                            <img src="img/galeria_02.jpg" height="100%" width="100%">
                        </a>
                    </div>
                    <div class="col-md-3 img-hover-zoom mt-5">
                        <a href="img/galeria_05.jpg" style="text-decoration:none;color: black;">
                            <p class="p-header">EQUIPO LICIDAN</p>
                            <img src="img/galeria_05.jpg" height="100%" width="100%">
                        </a>
                    </div>
                    <div class="col-md-3 img-hover-zoom mt-5">
                        <a href="img/info-two-img1.jpg" style="text-decoration:none;color: black;">
                            <p class="p-header">WORKSHOP</p>
                            <img src="img/info-two-img1.jpg" height="100%" width="100%">
                        </a>
                    </div>
                    <div class="col-md-3 img-hover-zoom mt-5">
                        <a href="img/galeria_04.jpg" style="text-decoration:none;color: black;">
                            <p class="p-header">TITULACION 2020</p class="p-header">
                            <img src="img/galeria_04.jpg" height="100%" width="100%">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ubicacion -->
    <section id="ubicacion">
        <div class="container text-center">
            <h1 class="quienesBorder"><br><b>¿Donde Encontrarnos?</b>
                <img src="img/mapa.png" width="50px" height="50px">
            </h1>
            <p>Estamos ubicados en Los Carreras #467</p>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3166.2674025541096!2d-72.35061848416403!3d-37.47801572267973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966bdd4caebf2629%3A0xa25a3d7a366d47d2!2sAv.%20Los%20Carrera%20467%2C%20Los%20Angeles%2C%20Los%20%C3%81ngeles%2C%20B%C3%ADo%20B%C3%ADo!5e0!3m2!1ses!2scl!4v1578510913210!5m2!1ses!2scl"
                width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" id="mapa">
            </iframe>

        </div><br>
    </section>

    <!-- contacto -->
    <section id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 my-5">
                    <div class="card contacto">
                        <div class="card-body">
                            <h2 class="text-center">¡Contactanos!
                                <img src="img/peluqueria.png" width="40px" height="40px">
                            </h2>
                            <form method="POST" action="/send_mail">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="text" class="form-control" name="contacto" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="correo" placeholder="Correo">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="telefono" placeholder="numero de contacto">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="mensaje" cols="30" rows="5"
                                        placeholder="Mensaje"></textarea>
                                </div>
                                <button type="submit" class="btn btn-danger btn-block">Enviar
                                    Mensaje</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- redes sociales -->
    <section id="redes">
        <div class="container text-center">
            <h1 class="text-center quienesBorder" style="font-size: 3rem;">
                <b>
                    Redes Sociales
                </b>
            </h1>
            <p class="text-center">Visita nuestras redes sociales</p>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <a href="https://www.facebook.com/licia.pacheco.98" target="_blank">
                        <img class="mx-4" src="img/facebook.png" width="120px" height="120px"></a>
                    <p>Peluqueria Licidan</p>
                </div>
                <div class="col-md-3">
                    <a href="https://www.facebook.com/Academia-de-Peluquer%C3%ADa-LICIDAN-197924636960422/"
                        target="_blank">
                        <img class="mx-4" src="img/facebook.png" width="120px" height="120px"></a>
                    <p>Academia Licidan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="page-footer font-small blue mt-3 bg-dark">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">Copyright © 2019-2020
            <a href="https://neofox.cl" target="_blank" style="text-decoration:none"> Neofox.cl
                <img class="mx-auto" src="img/fox-head.png" width="40px" height="40px"></a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- BOOTSTRAP SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
         <!-- BAGUETTEBOX JS -->
    <script type="text/javascript" src="js/baguetteBox.min.js"></script>


    <!-- BAGUETTE BOX SCRIPT -->
    <script>
        baguetteBox.run('.galeria1');
    </script>
    <script>

        window.sr = ScrollReveal();
        sr.reveal('.navbar', {
            duration: 2000,
            origin: 'bottom'
        });

        sr.reveal('#quienes', {
            duration: 2000,
            origin: 'right',
           
        });
        sr.reveal('#dama', {
            duration: 2000,
            origin: 'top',
           
        });
        sr.reveal('#varon', {
            duration: 2000,
            origin: 'left',
          

        });
        sr.reveal('#niño', {
            duration: 2000,
            origin: 'right',
           

        });
        sr.reveal('#galeria', {
            duration: 2000,
            origin: 'right',
            

        });
        sr.reveal('#ubicacion', {
            duration: 2000,
            origin: 'left',
            

        });
        sr.reveal('#mapa', {
            duration: 2000,
            origin: 'bottom',
          

        });
        sr.reveal('#contact', {
            duration: 2000,
            origin: 'right',
           

        });
        sr.reveal('#redes', {
            duration: 2000,
            origin: 'bottom',
            

        });

    </script>

</body>

</html>