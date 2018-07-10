@extends('layouts.app')

@section('content')

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
                        <a href="preguntas_frecuentes" class="nav-link">Preguntas frecuentes</a>
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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
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
