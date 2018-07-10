@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Ya sos parte de Vinos Del Sur
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<nav class="navbar navbar-expand-md navbar-light  sticky/top">
    <div class="container-fluid">
        <a class="navbar-brand logo" href="index.html">
    <img src="./img/logo-transparente.png" width="50" height="50" alt="Logo"><span id="logo-fuente">Vinos del Sur</span>
    </a>
        <!-- <a class="navbar-logo" href="index.html"><img src="./img/logo-transparente.png" alt=""><p>Vinos del Sur</p></a> -->
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
                
            </ul>
        </div>
    </div>
    
    </nav>