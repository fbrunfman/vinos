<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
            <a class="navbar-brand logo" href="index.html">
        <img src="./img/logo-transparente.png" width="50" height="50" alt="Logo"><span id="logo-fuente">Vinos del Sur</span>
        </a>
            <!-- <a class="navbar-logo" href="index.html"><img src="{{asset('img/logo-transparente.png')}}"; alt=""><p>Vinos del Sur</p></a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-menu" id="navbarResponsive">
                <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                    <a href="index.html" class="nav-link">Inicio</a>
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
        
    
    <div>
        <a href="/products/create">Nuevo Producto</a>
    </div>
    
    <div class="container">
            @foreach ($products as $product)
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card" style="width: 12.5rem;">
                      <img width='100' src="{{ asset($product->imagen) }}"  />
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->bodega }}</h5>
                            <h5 class="card-title">{{ $product->modelo }}</h5>
                            <h5 class="card-title"> Fecha: {{ $product->fecha }}</h5>
                            <p class="card-text">Código: {{ $product->id }}</p>
                            <a href="{{ $product->id }}/delete">Eliminar</a>
                              
                        </div>
                    </div>
                    @endforeach     
              </div>
              </div>
        {{ $products->links() }}
         </div>
        </div>
   
                        {{--  <a href="/products/{{ $product->id }}/delete">Eliminar</a>  --}}
       
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