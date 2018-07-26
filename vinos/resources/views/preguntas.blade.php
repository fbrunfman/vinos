<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vinos del Sur</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="./css/style.css" type="text/css" rel="stylesheet" >
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link rel="icon" href="./img/logo-transparente.png">
</head>
<body>
	<!-- log in -->
	<div
	<button type="button" href= 'login' class="btn btn-light">   @if (Route::has('login'))
		<div class="top-right links">
			@auth
				<a href="{{ url('/home') }}">Deslogeate!</a>
			@else
				<a href="{{ route('login') }}">Login</a>
				<a href="{{ route('register') }}">Registrate</a>
			@endauth
		</div>
	@endif</button>
</div>
	<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light  sticky/top">
<div class="container-fluid">
	<a class="navbar-brand logo" href="index.html">
<img src="./img/logo-transparente.png" width="50" height="50" alt="Logo"><span id="logo-fuente">Vinos del Sur</span>
</a>
	<!-- <a class="navbar-logo" href="/"><img src="./img/logo-transparente.png" alt=""><p>Vinos del Sur</p></a> -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse nav-menu" id="navbarResponsive">
		<ul class="navbar-nav ml-auto ">
		<li class="nav-item">
			<a href="/" class="nav-link">Inicio</a>
		</li>
		<li class="nav-item">
				<a href="/nuestrosvinos" class="nav-link">Nuestros vinos</a>
			</li>
			<li class="nav-item">
					<a href="#" class="nav-link">Quienes somos</a>
				</li>
				<li class="nav-item">
					<a href="/preguntas_frecuentes" class="nav-link">Preguntas frecuentes</a>
			</li>
			<li class="nav-item">
					<a href="#" class="nav-link">Envios</a>
			</li>
				<li class="nav-item">
						<a href="/register" class="nav-link">Unite</a>
					</li>
		</ul>
	</div>
</div>
</nav>

   <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Preguntas frecuentes</h1>
            </div>
          </div>

          <!-- Lista de preguntas -->
          <div class="preguntas">
        <ul>
            <li>¿Hacen envíos los vinos a todo el país?</li>
            <p>Si, cubrimos todo el país, y también algunos paises limítrofes</p>
            <li>¿Qué métodos de pago aceptan?</li>
            <p>A través del sitio web aceptamos tarjetas de crédito (Visa, Mastercard) y pagos a través de PagoFácil y Rapipago</p>
            <li>¿Cuánta demora tienen los envíos?</li>
            <p>Depende del lugar de entrega. Dentro de la ciudad de Buenos Aires 48 hrs hábiles. El envío al interior entre tres a cuatro días hábiles.</p>
            <li>¿Tienen un local físico?</li>
            <p>Sí. Estamos en José Hernández 127, CABA, Argentina</p>
            <li>¿Aceptan devoluciones?</li>
            <p>Siempre y cuando el producto esté en perfectas condiciones, aceptamos devoluciones</p>
            <li>¿Hacen descuentos al por mayor?</li>
            <p>Para compras al por mayor, por favor comunicarse vía e-mail a info@vinosdelsur.com.ar</p>
            <li>¿Trabajan con bodegas nacionales únicamente?</li>
            <p>Trabajamos con bodejas de todo el mundo</p>
        </ul>
    </div>

		<!--- Footer -->
		<footer class="container-fluid">
				<!-- redes sociales -->
					<div class="row text-center padding">
					<div class="col-12 conecta">
						<h2>Conecta</h2>
					</div>
					<div class="col-12 social padding social-nav">
						<a href=""><i class="fab fa-facebook-f"></i></a>
						<a href=""><i class="fab fa-twitter"></i></a>
						<a href=""><i class="fab fa-instagram"></i></a>
					</div>
				</div>
			<div class="container-fluid padding">
				<div class="row text-center">
					<div class="col-md-4 footer-box" >
						<hr class="light">
						<img src="img/logo-transparente.png" alt="">
						<hr class="light">

						<p>email info@vinosdelsur.com.ar</p>
					</div>
					<div class="col-md-4 footer-box align-middle">
						<hr class="light">
						<h6>Nuestros horarios</h6>
						<hr class="light">
						<p>Lunes a Viernes de 9am a 18pm</p>
						<p>Dirección: José Hernández 127, CABA, Argentina </p>
						<a class="telefono" href="tel:+5411932766709"><p>011-4812-6301</p></a>
					</div>
					<div class="col-md-4 footer-box">
						<hr class="light">
						<h6>Bodegas amigas</h6>
						<hr class="light">
						<p>Luigi Bosca</p>
						<p>Don Perignon</p>
						<p>Stella Bella</p>
					</div>
				</div>
			</div>
		</footer>
