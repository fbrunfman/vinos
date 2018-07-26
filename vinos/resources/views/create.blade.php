<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Agregar Producto</title>
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
  
  
  
  <h1>Agregar producto</h1>
  
  
  
   <form action="/products" method="post" enctype="multipart/form-data">
     {{ csrf_field() }}
     <div class="form-group">
            <label for="bodega">Bodega
              <input type="text" name="bodega" value="">
            </label>
          </div>
     <div class="form-group">
       <label for="modelo">Nombre
         <input type="text" name="modelo" value="">
       </label>
     </div>   
     <div class="form-group">
        <label for="fecha">Fecha
          <input type="text" name="fecha" value="">
        </label>
        </div>
        <div>
        Selecciona la imagen:
        <input type="file" name="imagen" id="file">
        <input type="hidden" value="{{ csrf_token()}}" name="_token">
      </div>   
    <button type="submit">Agregar</button>
     </div>
   </form>

   
   @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }} </li>
            @endforeach
        </ul>
    </div>
   @endif
   
 </body>
</html>