<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Licidan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- carousel galeria -->
        <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
	    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
        <!-- FORMULARIO AJAX -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Sniglet&display=swap" rel="stylesheet">
        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- BAGUETTEBOX -->
        <link rel="stylesheet" type="text/css" href="css/baguetteBox.min.css">
        <!-- CUSTOM CSS -->
        <link rel="stylesheet" href="css/main.css?version=0.3">
        <link rel="stylesheet" href="css/animate.css">
    </head>

    <body data-spy="scroll" data-target="#navbarNav">

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">

                <a class="navbar-brand" href="#">
                    <img src="img/licidan.png" width="150px" height="50px">
                    <img src="img/cortar-con-tijeras.png" width="50px" height="50px">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span><img src="img/menu.png" height="32px" width="32px"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link fromLeft" href="#header">Inicio</a>
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
                            <a class="nav-link fromLeft" href="#contact">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fromLeft" href="#ubicacion">Ubicacion</a>
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
            <div id="carouselExampleCaptions" class="carousel slide my-5" data-ride="carousel">

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
        <section id="quienes">
            <div class="container">
                <h1 class="text-center quienesBorder" style="font-size: 3rem;">
                    <b>
                        ¿Quiénes Somos?
                        <img src="img/barberia.png" width="50px" height="50px">
                    </b>
                </h1>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla corrupti dolorem cupiditate blanditiis
                    temporibus magnam nesciunt officia officiis. Et, recusandae nulla. Rerum, reprehenderit saepe. Id nisi
                    rem minima exercitationem cum maxime culpa, maiores quas eos aspernatur? Repellat, officiis a eius
                    ducimus iste corporis totam assumenda magni esse earum. Corrupti, quisquam!
                </p><br>
            </div>
        </section>

        <!-- SERVICIOS -->
        <section id="precios">
            <div class="parallax">
                <div class="container">

                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="text-center quienesBorder" style="font-size: 3rem;"><br><b>Nuestros Servicios</b>
                                <img src="img/secador-de-pelo.png" width="50px" height="50px">
                            </h1>
                            <p>
                                Una peluquería o barbería es un local donde se ofrecen varios servicios estéticos,
                                principalmente el corte de pelo, pero también suelen realizarse otros como afeitado,
                                depilado, manicura, pedicura, etc. Cuando se trata de muchos servicios diferentes
                                suele llamarse salón de belleza.
                            </p>
                        </div>
                    </div>
        
                    <div class="row justify-content-between">

                        <div class="card card-servicios mb-3 col-md-12 col-lg-12" id="dama">
                            <div class="row no-gutters">

                                <div class="col-md-12 col-lg-12">
                                    <div class="card-body">
                                        <h1 class="card-title text-center tituloBorder">
                                            <b><img src="img/cabello-mujer.png" class="mx-auto" width="50px" height="50px"> Dama</b>
                                        </h1>

                                        <div class="row">

                                            <div class="col-md-6">
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

                                            <div class="col-md-6">
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

                            </div>
                        </div>
        
                        <div class="card card-servicios mb-3 col-md-12 col-lg-6" id="varon">
                            <div class="row no-gutters">

                                <div class="col-md-12 col-lg-12">
                                    <div class="card-body">
                                        <h1 class="card-title text-center tituloBorder">
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
        
                        <div class="card card-servicios mb-3 col-md-12 col-lg-5" id="niño">
                            <div class="row no-gutters">
    
                                <div class="col-md-12 col-lg-12">
                                    <div class="card-body">
                                        <h1 class="card-title text-center tituloBorder">
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
            </div>
        </section>

        <!-- GALERIA -->
        <section id="galeria" class="mt-5">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="info-one-h1 quienesBorder mt-4">Galeria
                            <img src="img/foto.png" class="mx-auto" width="50px" height="50px">
                        </h1>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="galeria1 col-md-12">
    
                                <div class="img-hover-zoom my-5">
                                    <a href="img/galeria_02.jpg" style="text-decoration:none;color: white;">
                                        <p class="p-header">ADMISION 2020</p>
                                        <img src="img/galeria_02.jpg" height="100%" width="100%">
                                    </a>
                                </div>
    
                                <div class="img-hover-zoom my-5 d-none">
                                    <a href="img/galeria_05.jpg" style="text-decoration:none;color: white;">
                                    </a>
                                </div>
    
                                <div class="img-hover-zoom my-5 d-none">
                                    <a href="img/info-two-img1.jpg" style="text-decoration:none;color: white;">
                                    </a>
                                </div>
    
                                <div class="img-hover-zoom my-5 d-none">
                                    <a href="img/galeria_04.jpg" style="text-decoration:none;color: white;">
                                    </a>
                                </div>
    
                            </div>
                        </div>

                        <div class="item">
                            <div class="galeria2 col-md-12">
    
                                <div class="img-hover-zoom my-5">
                                    <a href="img/galeria2_01.jpg" style="text-decoration:none;color: white;">
                                        <p class="p-header">CLIENTES</p>
                                        <img src="img/galeria2_01.jpg" height="100%" width="100%">
                                    </a>
                                </div>
    
                                <div class="img-hover-zoom my-5 d-none">
                                    <a href="img/galeria2_02.jpg" style="text-decoration:none;color: white;">
                                    </a>
                                </div>
    
                                <div class="img-hover-zoom my-5 d-none">
                                    <a href="img/galeria2_03.jpg" style="text-decoration:none;color: white;">
                                    </a>
                                </div>
    
                            </div>
                        </div>

                        <div class="item">
                            <div class="galeria3 col-md-12">
                                        
                                <div class="img-hover-zoom my-5">
                                    <a href="img/galeria3_01.jpg" style="text-decoration:none;color: white;">
                                        <p class="p-header">ACADEMIA</p>
                                        <img src="img/galeria3_01.jpg" height="100%" width="100%">
                                    </a>
                                </div>
                        
                                <div class="img-hover-zoom my-5 d-none">
                                    <a href="img/info-two-img1.jpg" style="text-decoration:none;color: white;">
                                    </a>
                                </div>
                        
                            </div>
                        </div>

                        <div class="item">
                            <div class="galeria4 col-md-12">

                                <div class="img-hover-zoom my-5">
                                    <a href="img/galeria_04.jpg" style="text-decoration:none;color: white;">
                                        <p class="p-header">TITULACION 2020</p class="p-header">
                                        <img src="img/galeria_04.jpg" height="100%" width="100%">
                                    </a>
                                </div>
    
                                <div class="img-hover-zoom my-5 d-none">
                                    <a href="img/galeria_02.jpg" style="text-decoration:none;color: white;">
                                    </a>
                                </div>
    
                                <div class="img-hover-zoom my-5 d-none">
                                    <a href="img/galeria_05.jpg" style="text-decoration:none;color: white;">
                                    </a>
                                </div>
    
                                <div class="img-hover-zoom my-5 d-none">
                                    <a href="img/info-two-img1.jpg" style="text-decoration:none;color: white;">
                                    </a>
                                </div>
    
                            </div>
                        </div>

                        <div class="item">
                            <div class="galeria5 col-md-12">
    
                                <div class="img-hover-zoom my-5">
                                    <a href="img/galeria4_01.jpg" style="text-decoration:none;color: white;">
                                        <p class="p-header">ESTILOS</p>
                                        <img src="img/galeria4_01.jpg" height="100%" width="100%">
                                    </a>
                                </div>
    
                                <div class="img-hover-zoom my-5 d-none">
                                    <a href="img/galeria4_02.jpg" style="text-decoration:none;color: white;">
                                    </a>
                                </div>
    
                                <div class="img-hover-zoom my-5 d-none">
                                    <a href="img/galeria4_03.jpg" style="text-decoration:none;color: white;">
                                    </a>
                                </div>
    
                                <div class="img-hover-zoom my-5 d-none">
                                    <a href="img/galeria4_04.jpg" style="text-decoration:none;color: white;">
                                    </a>
                                </div>
    
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- contacto -->
        <section id="contact">
            <div class="parallax2">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">

                            <div class="card contacto my-5">
                                <div class="card-body">
                                    <h2 class="text-center">¡Contactanos!
                                        <img src="img/peluqueria.png" width="40px" height="40px">
                                    </h2>
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="contacto" placeholder="Nombre">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="correo" placeholder="Correo (opcional)">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="telefono" placeholder="numero de contacto">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="mensaje" cols="30" rows="5"
                                                placeholder="Mensaje"></textarea>
                                        </div>
                                        <button type="button" class="btn btn-danger btn-block btn-send" data-toggle="modal" data-target="#exampleModalCenter">Enviar Mensaje</button>
                                        <button type="reset" hidden id="resetForm"></button>
                                    </form>

                                </div>
                            </div>

                            <div class="container text-center text-white">
                                <h1 class="text-center quienesBorder" style="font-size: 3rem;"><b>Redes Sociales</b></h1>
                                <p class="text-center">Visita nuestras redes sociales</p>
                                <div class="row justify-content-center">
                                    <div class="col-md-3">
                                        <a href="https://www.facebook.com/licia.pacheco.98" target="_blank">
                                            <img class="mx-4" src="img/facebook.png" width="60px" height="60px"></a>
                                        <p>Peluqueria</p>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="https://www.facebook.com/Academia-de-Peluquer%C3%ADa-LICIDAN-197924636960422/"
                                            target="_blank">
                                            <img class="mx-4" src="img/facebook.png" width="60px" height="60px"></a>
                                        <p>Academia</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ubicacion -->
        <section id="ubicacion" class="mt-5">
            <div class="container text-center">
                <h1 class="quienesBorder"><br><b>¿Donde Encontrarnos?</b>
                    <img src="img/mapa.png" width="50px" height="50px">
                </h1>
                <p>Estamos ubicados en Los Carreras #467</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3166.2674025541096!2d-72.35061848416403!3d-37.47801572267973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966bdd4caebf2629%3A0xa25a3d7a366d47d2!2sAv.%20Los%20Carrera%20467%2C%20Los%20Angeles%2C%20Los%20%C3%81ngeles%2C%20B%C3%ADo%20B%C3%ADo!5e0!3m2!1ses!2scl!4v1578510913210!5m2!1ses!2scl"
                    width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" id="mapa">
                </iframe>
            </div>
        </section>

        <!-- Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="modal-success" hidden></button>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header modalContacto">
                        <h3 class="modal-title" id="exampleModalLabel">¡Correo enviado exitosamente!</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <div class="modal-body text-center">
                        <h4 class="text-center">Recuerde visitar nuestras redes sociales.</h4>
                        <div class="row justify-content-center">
                            <div class="col-md-3">
                                <a href="https://www.facebook.com/Academia-de-Peluquer%C3%ADa-LICIDAN-197924636960422/"
                                    target="_blank">
                                    <img class="mx-4 my-2" src="img/facebook.png" width="50px" height="50px"></a>
                                    <small class="text-center"style="color: #ad5389;">Academia</small>
                            </div>
                            <div class="col-md-3">
                                <a href="https://www.facebook.com/licia.pacheco.98" 
                                    target="_blank">
                                    <img class="mx-4 my-2" src="img/facebook.png" width="50px" height="50px"></a>
                                    <small class="text-center" style="color:#ad5389;">Peluqueria</small>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer modalContacto">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal" 
                        style="color:white; border: 2px solid #ad5389; ">Volver</button>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="page-footer font-small blue mt-3 bg-dark">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">Copyright © 2019-2020
                <a href="https://neofox.cl" target="_blank" style="text-decoration:none"> Neofox.cl
                    <img class="mx-auto" src="img/fox-head.png" width="40px" height="40px"></a>
            </div>
            <!-- Copyright -->

        </footer>

        <!-- BOOTSTRAP SCRIPTS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <!-- BAGUETTEBOX JS -->
        <script type="text/javascript" src="js/baguetteBox.min.js"></script>
        <!-- carrusel galeria js -->
        <script src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js" type="text/javascript"></script>
        <script src="OwlCarousel2-2.3.4/dist/owl.carousel.js" type="text/javascript"></script>

        <script type="text/javascript">

            baguetteBox.run('.galeria1');
            baguetteBox.run('.galeria2');
            baguetteBox.run('.galeria3');
            baguetteBox.run('.galeria4');
            baguetteBox.run('.galeria5');

            var owl = $('.owl-carousel');
            owl.owlCarousel({
                loop:false,
                margin:10,
                autoplay:true,
                autoplayTimeout:4000,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },            
                    1000:{
                        items:4
                    }
                }
            });

            owl.on('mousewheel', '.owl-stage', function (e) {
                if (e.deltaY>0) {
                    owl.trigger('next.owl');
                } else {
                    owl.trigger('prev.owl');
                }
                e.preventDefault();
            });

            function validar_email( email ){
                var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email) ? true : false;
            }

            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });
                    

            $(".btn-send").click(function(e){

                e.preventDefault();

                var contacto = $("input[name=contacto]").val();
                    if(contacto == ''){
                        return alert("Debe de ingresar un nombre");
                    }

                var correo = $("input[name=correo]").val();
                    if(correo == ''){
                        return alert("Debe de ingresar un correo");
                    }
                    else if(validar_email(correo)){
                        var correo = $("input[name=correo]").val();
                    }else{
                        return alert("Formato de correo incorrecto");
                    }

                var telefono = $("input[name=telefono]").val();
                    if(telefono == ''){
                        return alert("Debe de ingresar su numero");
                    }

                var mensaje = $("textarea[name=mensaje]").val();
                    if(mensaje == ''){
                        return alert("Debe de ingresar su mensaje");
                    }

                $.ajax({
                    type:'POST',
                    url:'/send_mail',
                    data:{contacto:contacto, correo:correo, telefono:telefono, mensaje:mensaje},
                    success:function(data){
                        $("#resetForm").click();
                        $("#modal-success").click();
                    }
                });
            });

        </script>

    </body>

</html>