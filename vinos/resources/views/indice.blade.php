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
	<link href="../assets/css/style.css" type="text/css" rel="stylesheet" >
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link rel="icon" href="./img/logo-transparente.png">
</head>


<body>
	<!-- log in -->
<div class="IniciaSe">
<a href=sesion.php>Inicia sesion</a>
</div>
	<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light  sticky/top">
<div class="container-fluid">
	<a class="navbar-brand logo" href="/">
<img src="./img/logo-transparente.png" width="50" height="50" alt="Logo"><span id="logo-fuente">Vinos del Sur</span>
</a>
	<!-- <a class="navbar-logo" href="indice"><img src="{{asset('img/logo-transparente.png')}}"; alt=""><p>Vinos del Sur</p></a> -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse nav-menu" id="navbarResponsive">
		<ul class="navbar-nav ml-auto ">
		<li class="nav-item">
			<a href="/" class="nav-link">Inicio</a>
		</li>
		<li class="nav-item">
				<a href="#" class="nav-link">Nuestros vinos</a>
			</li>
			<li class="nav-item">
					<a href="#" class="nav-link">Quienes somos</a>
				</li>
				<li class="nav-item">
					<a href="preguntas_frecuentes.html" class="nav-link">Preguntas frecuentes</a>
			</li>
			<li class="nav-item">
					<a href="#" class="nav-link">Envios</a>
			</li>
				<li class="nav-item">
						<a href="register" class="nav-link">Unite</a>
					</li>
		</ul>
	</div>
</div>
</nav>




<!--- Image Slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
	  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
	  <div class="carousel-item active">
		<img class="d-block w-100" src="./img/vinos2.jpg" alt="First slide">
			<div class="carousel-caption d-none d-md-block">
				<h1>Nuevos varietales</h1>

			</div>
	</div>
	  <div class="carousel-item">
				<div class="carousel-caption d-none d-md-block">
						<h1>Cosechas premium</h1>
					</div>
		<img class="d-block w-100" src="./img/vinos1.jpg" alt="Second slide">
	  </div>
	  <div class="carousel-item">
				<div class="carousel-caption d-none d-md-block">
						<h1>Vinos Del Sur</h1>
						<h3>2018</h3>
					</div>
		<img class="d-block w-100" src="./img/wine3.jpg" alt="Third slide">
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


<!--- Welcome Section -->
<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class=display-4>Ofertas especiales</h1>
	</div>
</div>
</div>

<!-- colums -->

<div class="container">
	<div class="row">
	  <div class="col-lg-3 col-md-4">
			<div class="card" style="width: 12.5rem;">
				<img class="card-img-top" src="img/figuero-1.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Figuero - Cabernet Suavignon</h5>
					<p class="card-text">Tinto Figuero 12 - Crianza 12 meses en barrica - $350</p>
					<a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
				</div>
			</div>
	  </div>
	  <div class="col-lg-3 col-md-4">
			<div class="card" style="width: 13.5rem;">
				<img class="card-img-top" src="{{URL::asset('/img/LA LINDA-2.jpg')}}" "alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">La Linda Bonarda - Malbec</h5>
					<p class="card-text">Un clásico de la familia Bosca - $230</p>
					<br>
					<br>
					<a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
				</div>
			</div>
		</div>


	  <div class="col-lg-3 col-md-4">
			<div class="card" style="width: 12rem;">
				<img class="card-img-top" src="{{URL::asset('/img/humberto canale-1.jpg')}}"" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Humberto Canale Estate - Malbec</h5>
					<p class="card-text">Ideal para los clásicos asados - $320</p>
					<br>
					<a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
				</div>
			</div>

	  </div>
	  <div class="col-lg-3 col-md-4">
			<div class="card" style="width: 13.3rem;">
				<img class="card-img-top" src="{{URL::asset('/img/luigi.jpg')}}" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Luigi Bosca Gala 1 · Malbec · </h5>
					<p class="card-text">Un vino que no necesita presentación - $680</p>
					<br>
					<a href="#" class="btn btn-outline-dark">Agregar al carrito</a>

				</div>

		</div>
	</div>
	  <div class="col-lg-3 col-md-4">
			<div class="card" style="width: 13.2rem;">
				<img class="card-img-top" src="{{URL::asset('/img/tomero-1.jpg')}}" " alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Tomero Malbec Bga Vistalba </h5>
					<p class="card-text">Un vino sólido al mejor precio - $125</p>
					<br>
					<br>
					<a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
				</div>
		</div>
	</div>
	  <div class="col-lg-3 col-md-4">
			<div class="card" style="width: 12rem;">
				<img class="card-img-top" src="{{URL::asset('/img/stella bella-1.jpg')}}" "alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Stella Bella - Cabernet Suavignon</h5>
					<p class="card-text">Nuevo sabor que viene de lejos - $340</p>
					<a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
				</div>

	  </div>

		</div>
  </div>
</div>
<hr>

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
<div class="carrito">
<button type="button" class="btn btn-outline-secondary" disabled>Ver carrito	<img src="img/carrito.jpg" alt=""> </button>
</div>

</body>
</html>