<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banqueteria NeoFox</title>
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- BAGUETTEBOX -->
    <link rel="stylesheet" type="text/css" href="css/baguetteBox.min.css">
    <!-- SCROLL REVEAL -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/main.css">
</head>

<body data-spy="scroll" data-target="#navbarNav">
    <section id="inicio"></section>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/banq-logo3.png" width="80px" height="50px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span><img src="img/menu.png" height="32px" width="32px"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link fromLeft" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fromLeft" href="#who">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fromLeft" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fromLeft" href="#galeria">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fromLeft" href="#contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fromLeft" href="#ubicacion">Ubicación</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CARRUSEL -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- INFO ONE -->
    <section id="who">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="info-one-h1">Sobre Nosotros</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis sint
                        laboriosam sed, blanditiis tenetur sapiente aliquam impedit? Magnam deleniti esse quod vitae,
                        repellendus voluptates corrupti expedita pariatur! Hic nulla reiciendis, omnis autem qui
                        voluptates harum consequatur facilis blanditiis aperiam odit aut numquam deleniti quia suscipit,
                        iusto quam mollitia? Vitae a velit sequi soluta ipsa pariatur, iure porro ut rem voluptas
                        eligendi dolorem repellendus expedita consequuntur impedit alias excepturi nostrum? Incidunt
                        ullam ad qui modi libero explicabo velit quae! Error reiciendis eligendi sed quibusdam
                        necessitatibus quos ut ab, perspiciatis veniam nobis placeat quia accusantium, iusto obcaecati
                        tempora. Nulla quo quae impedit!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- INFO TWO -->
    <section id="servicios">
        <div class="parallax">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="info-one-h2 my-5">Nuestros Servicios</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center text-white my-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Debitis sint laboriosam sed, blanditiis tenetur sapiente aliquam impedit? Magnam deleniti
                            esse quod vitae, repellendus voluptates corrupti expedita pariatur! Hic nulla reiciendis,
                            omnis autem qui voluptates harum consequatur facilis blanditiis aperiam odit aut numquam
                            deleniti quia suscipit, iusto quam mollitia? Vitae a velit sequi soluta ipsa pariatur, iure
                            porro ut rem voluptas eligendi dolorem repellendus expedita consequuntur impedit alias
                            excepturi nostrum? Incidunt ullam ad qui modi libero explicabo velit quae! Error reiciendis
                            eligendi sed quibusdam necessitatibus quos ut ab, perspiciatis veniam nobis placeat quia
                            accusantium, iusto obcaecati tempora. Nulla quo quae impedit!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALERIA -->
    <section id="galeria" class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="info-one-h1">Galeria</h1>
                </div>
            </div>
            <div class="galeria1">
                <div class="row text-center">
                    <div class="col-md-3 img-hover-zoom my-5">
                        <!-- <p class="p-header">Placeholder Text</p> -->
                        <a href="img/gal.jpg">
                            <img src="img/gal.jpg" height="300px" width="200px">
                        </a>
                    </div>
                    <div class="col-md-3 img-hover-zoom my-5">
                        <!-- <p class="p-header">Placeholder Text</p> -->
                        <a href="img/gal-2.jpg">
                            <img src="img/gal-2.jpg" height="300px" width="200px">
                        </a>
                    </div>
                    <div class="col-md-3 img-hover-zoom my-5">
                        <!-- <p class="p-header">Placeholder Text</p> -->
                        <a href="img/gal-3.jpg">
                            <img src="img/gal-3.jpg" height="300px" width="200px">
                        </a>
                    </div>
                    <div class="col-md-3 img-hover-zoom my-5">
                        <!-- <p class="p-header">Placeholder Text</p class="p-header"> -->
                        <a href="img/gal-4.jpg">
                            <img src="img/gal-4.jpg" height="300px" width="200px">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO -->
    <section id="contacto">
        <div class="parallax-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center mt-5">
                        <h1 class="info-one-h2">Contacto</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <p class="text-center text-white h4">Si deseas reservar o escribirnos puedes hacerlo desde el
                            siguiente formulario, te llamaremos al momento de leer tu mensaje</p>
                    </div>
                </div>
                <form method="POST" action="/send_mail">
                    {{csrf_field()}}
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="contacto" placeholder="Ingrese su nombre" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="correo" placeholder="Ingrese su correo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="telefono" placeholder="Ingrese su n° telefono" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="mensaje" class="form-control" id="" cols="30" rows="10"
                                    placeholder="Ingrese su Mensaje"></textarea>
                            </div>
                            <button class="btn btn-golden btn-block mb-4 text-white"><b>Enviar Mensaje</b></button>
                        </div>
                    </div>
                </form>


                <div class="row">
                    <div class="col-md-12 text-center mt-5">
                        <h1 class="info-one-h2">Redes Sociales</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 my-3">
                        <p class="text-center text-white h4">Visita nuestras redes sociales</p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-2">
                        <a href="https://www.facebook.com/deliciaspellu/" target="_blank">
                            <img class="mx-4" src="img/facebook.png" width="80px" height="80px"></a>
                    </div>
                    <div class="col-md-2">
                        <a href="https://www.instagram.com/delicias.pellu/" target="_blank">
                            <img class="mx-4" src="img/instagram.png" width="80px" height="80px"></a>
                    </div>
                </div> <br>

            </div>
        </div>
        @if (session('success'))
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">
                {{ session('success') }}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
@endif
    </section>

    <!-- UBICACION -->
    <section id="ubicacion">
        <div class="container my-5">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="info-one-h1 text-center">Nuestra Ubicación</h2 c>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3165.78354145113!2d-72.3336110624011!3d-37.48943408746484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966bc2a7bdfa5adb%3A0x232460335437c4e7!2zUsOtbyBZYXF1aSwgTG9zIMOBbmdlbGVzLCBCw61vIELDrW8!5e0!3m2!1ses!2scl!4v1578938312978!5m2!1ses!2scl"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="page-footer font-small blue mt-3">

        <!-- Copyright -->
        <div class="footer-copyright text-center text-white py-3">Copyright © 2019-2020
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

<script type="text/javascript" src="js/test.js"></script>
    <!-- BAGUETTE BOX SCRIPT -->
    <script>
        baguetteBox.run('.galeria1');
    </script>

    <!-- SCROLL REVEAL SCRIPTS -->
    <script>
        window.sr = ScrollReveal();
        sr.reveal('.navbaar', {
            duration: 2000,
            origin: 'bottom'
        });
        sr.reveal('.header-content-left', {
            duration: 2000,
            origin: 'top',
            distance: '300px'
        });
        sr.reveal('.header-content-right', {
            duration: 2000,
            origin: 'bottom',
            distance: '300px'
        });
        sr.reveal('#testimonios', {
            duration: 2000,
            origin: 'right',
            distance: '300px'
        });
        sr.reveal('.info-one-left', {
            duration: 2000,
            origin: 'left',
            distance: '300px'
        });
        sr.reveal('.info-one-right', {
            duration: 2000,
            origin: 'right',
            distance: '300px'
        });
        sr.reveal('#info-two', {
            duration: 2000,
            origin: 'right',
        });
        sr.reveal('#contact', {
            duration: 2000,
            distance: '300px',
            origin: 'right',
        });
    </script>

</body>

</html>