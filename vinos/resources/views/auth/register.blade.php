@extends('layouts.app')
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
                    <a href="/nuestrosvinos" class="nav-link">Nuestros vinos</a>
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
                            <a href="registracion.html" class="nav-link">Unite</a>
                        </li>
            </ul>
        </div>
    </div>
    </nav>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrate') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('lastname') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <script>
                            document.formulario.onsubmit=function(evento){
                              evento.preventDefault()
                              var reMail= /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/
                              var email= document.getElementById('email').value
                              //var email = document.forms[0].elements.email.value
                              //var email = document.formulario.email.value
                              //var {email}=document.forms
                              if(!reMail.test(email)){
                                swal("error","Debe colocar un correo valido...","error")
                                return
                              }
                              var clave = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{6,}$/
                              var pass=document.forms[0].elements.password.value
                              if(!clave.test(pass)){
                                swal("error","Debe colocar una contraseña valida, ocho caracteres...","error")
                                return
                              }
                              
                              document.formulario.submit() 
                            }
                          </script>
                </div>
            </div>
        </div>
    </div>
</div>
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
@endsection
