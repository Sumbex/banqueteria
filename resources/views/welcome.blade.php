<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NeoFox Informática</title>
    <meta name="description"
    content="Desarrollo de sistemas informaticos y diseño web. NeoFox Informaticos del Bio-Bio" />
    <link rel="icon" type="image/x-icon" href="img/neofox-ico.ico">
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fixed.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body data-spy="scroll" data-target="#navbarResponsive">

	<!-- INICIO DE LA BIENVENIDA WEB -->
	<div id="home">

		<!-- INICO NAVBAR -->
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href="#"><img src="img/neofox-nav.png" alt="navbar-logo">Neofox</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#home">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#info-one">Sobre Nosotros</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#info-two">Servicios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#info-three">Nuestros Clientes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#info-four">Contacto</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- FIN NAVBAR -->

		<!-- INICIO SECCION LANDING -->
		<div class="landing">
			<div class="home-wrap">
				<div class="home-inner">

				</div>
			</div>
		</div>

		<div class="caption text-center">
			<h1>Sistemas informaticos</h1>
			<h3>Diseños web y Sistemas Administrativos</h3>
			<a class="btn btn-outline-light btn-lg" href="#info-four">Conocer Más</a>
		</div>
		<!-- FIN SECCION LANDING -->

	</div>
	<!-- FIN DE LA BIENVENIDA WEB -->

	<!-- INICIO DE LA INFO ONE-->
	<div id="info-one" class="offset">

		<div class="col-12 narrow text-center">
			<h1>Sobre Nosotros</h1>
			<p class="lead">Somos una empresa enfocada a dar soluciones a todo tipo de problemas informaticos, damos conocer su
				empresa/negocio a internet y tambien a dar soluciones administrativas con nuestros sistemas informaticos.
				Contamos con más de 5 años de experiencia en el desarrollo informatico</p>
			<!-- <a class="btn btn-secondary btn-md" href="http://www.google.cl" target="_blank">Placeholder Button</a> -->
		</div>

	</div>
	<!-- FIN DE LA INFO ONE -->

	<!-- INICIO DE LA INFO TWO-->
	<div id="info-two" class="offset">

		<!-- INICIO DEL JUMBOTRON -->
		<div class="jumbotron">
			<div class="narrow text-center">
				<div class="col-12">
					<h3 class="heading">Servicios</h3>
					<div class="heading-underline"></div>
				</div>

				<div class="row text-center">
					<div class="col-md-4">
						<div class="feature">
							<i class="fas fa-globe fa-4x" data-fa-transform="shrink-3 up-5"></i>
							<h3>Desarrollo Web</h3>
							<p>Si necesita un sitio de presentación web para dar a conocer su empresa y principalmente
								sus servicios a ofrecer, contamos con una gran variedad de diseños personalizados que
								iremos desarrollando junto a usted.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature">
							<i class="fas fa-laptop-code fa-4x" data-fa-transform="shrink-3 up-5"></i>
							<h3>Desarrollo de Sistemas</h3>
							<p>Si desea un sistema para administrar su empresa o su negocio, le ofrecemos la oportunidad
								de desarrollar junto a nosotros una plataforma en la cual se sienta comodo al momento de
								trabajar.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="feature">
							<i class="fas fa-comments-dollar fa-4x" data-fa-transform="shrink-3 up-5"></i>
							<h3>Asesorias</h3>
							<p>Le otorgamos la facilidad de contactar con nosotros para resolver dudas referente a
								inversiones y manejo de herramientas informaticas.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- FIN DEL JUMBOTRON -->
	</div>
	<!-- FIN DE LA INFO TWO -->

	<!-- INICIO DE LA INFO THREE-->
	<div id="info-three" class="offset">
		<div class="fixed-background">
			<div class="row dark text-center">
				<div class="col-12">
					<h3 class="heading">Clientes</h3>
					<div class="heading-underline"></div>
				</div>

				<div class="col-md-4">
					<h3>Sindicato CMPC Santa Fe</h3>
					<div class="feature">
						<a href="http://www.sindicatoptastafe.cl/" target="_blank"><i class="fas fa-code fa-3x"></i></a>
					</div>
					<p class="lead">Sistema de Administración</p>
				</div>

				<div class="col-md-4">
					<h3>Peluqueria Licidan</h3>
					<div class="feature">
						<a href="http://licidan.neofox.cl/" target="_blank"><i class="fas fa-code fa-3x"></i></a>
					</div>
					<p class="lead">Pagina de Presentación</p>
				</div>

				<div class="col-md-4">
					<h3>Delicias Pellü</h3>
					<div class="feature">
						<a href="http://banq.neofox.cl/" target="_blank"><i class="fas fa-code fa-3x"></i></a>
					</div>
					<p class="lead">Pagina de Presentación</p>
				</div>

			</div>
			<div class="fixed-wrap">
				<div class="fixed">

				</div>
			</div>
		</div>
	</div>
	<!-- FIN DE LA INFO THREE -->


	<!-- INICIO DE LA INFO FOUR -->
	<div id="info-four" class="offset">
		<div class="jumbotron">
			<div class="col-12 text-center">
				<h3 class="heading">Contacto</h3>
				<div class="heading-underline"></div>
			</div>

			<div class="row">
				<div class="col-md-6 clients">
                    <form>
						<div class="row text-center">
							<div class="col-md-12">
								<h3>Enviar Mensaje</h3>
								<p>Si desea contactar con nosotros puede escribirnos un mensaje y le responderemos a la
									brevedad</p>
								<div class="form-group">
									<input name="contacto" type="text" class="form-control"
										placeholder="Ingrese su nombre" minlength="2" maxlength="50">
								</div>
								<div class="form-group">
									<input name="telefono" type="text" class="form-control"
										placeholder="Ingrese su numero de telefono" minlength="5" maxlength="15">
								</div>
								<div class="form-group">
									<input name="correo" type="email" class="form-control"
										placeholder="Ingrese su correo (Opcional)" minlength="4" maxlength="50">
								</div>
								<div class="form-group">
									<textarea id="text-area" name="mensaje" class="form-control" cols="30" rows="5"
										placeholder="Ingrese su mensaje" minlength="5" maxlength="100"></textarea>
                                </div>
                                <button class="btn btn-secondary btn-block text-white btn-send">Enviar</button>
                                <button type="reset" hidden id="resetForm"></button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-6 clients">
					<div class="row text-center">
						<div class="col-md-12">
							<h3>Redes Sociales</h3>
							<p>Puede ver más de nuestros trabajos o escribirnos desde nuestras redes sociales</p>
							<div class="row img-soc">
								<div class="col-md-6">
									<a href="https://www.facebook.com/NeoFoxInformatica" target="_blank"><img
											src="img/fb-icon.png">
									<h3>Facebook</h3>
								</a>
								</div>
								<div class="col-md-6">
									<a href="https://www.instagram.com/neofoxinformatica" target="_blank"><img
											src="img/ins-icon.png">
									<h3>Instagram</h3>
								</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- <div class="col-12 narrow text-center">
			<p class="lead"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui assumenda accusamus voluptatum
				expedita ipsum architecto corrupti. A maxime nam dicta.</p>
			<a class="btn btn-secondary btn-md" href="http://www.google.cl" target="_blank">Placeholder</a>
		</div> -->

	</div>
	<!-- FIN DE LA INFO FOUR -->

	<!-- INICIO DE CONTACTO-->
	<div id="contacto" class="offset">
		<footer>
			<div class="row justify-content-center">
				<div class="col-md-5 text-center">
					<img src="img/neofox-nav.png">
					<p>NeoFox Informatica Ltda Todos los Derechos Reservados.</p>
					<strong>Información de Contacto</strong>
					<p>+569 2038 7028<br>neofox.informatica@gmail.com</p>
					<a href="https://www.facebook.com/NeoFoxInformatica" target="_blank"><i class="fab fa-facebook-square"></i></a>
					<a href="https://www.instagram.com/neofoxinformatica" target="_blank"><i class="fab fa-instagram"></i></a>
				</div>
				<hr class="socket">
				&copy; NeoFox Ltda. 2020
			</div>
		</footer>
	</div>
    <!-- FIN DE CONTACTO -->
    

    {{-- MODAL --}}
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="modal-success" data-toggle="modal" data-target="#exampleModal" hidden>
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Mensaje Enviado Correctamente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <h3>Nos pondremos en contacto con usted lo antes posible</h3>
        </div>
        <div class="modal-footer mx-auto">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">¡Ok!</button>
        </div>
      </div>
    </div>
  </div>

	<!--- Script Source Files -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
	<!--- End of Script Source Files -->

</body>

<script type="text/javascript">

$.ajaxSetup({

headers: {

    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

}

});
   

    $(".btn-send").click(function(e){

  

        e.preventDefault();

   

        var contacto = $("input[name=contacto]").val();
        if(contacto == ''){
            return alert("Debe de ingresar un nombre");
        }

        var correo = $("input[name=correo]").val();

        var telefono = $("input[name=telefono]").val();
        if(telefono == ''){
            return alert("Debe de ingresar su numero");
        }

        var mensaje = $("input[name=mensaje]").val();
        if(mensaje == ''){
            return alert("Debe de ingresar un mensaje");
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

</html>