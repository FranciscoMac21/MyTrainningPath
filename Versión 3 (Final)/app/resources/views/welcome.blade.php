@extends('layouts.app-MTP')

@section('title', 'Home')

@section('content')

<section class="hero is-dark is-fullheight fondo">
    <div class="hero-head">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-brand">
                    <div>
                    <img src="/images/logo/logoMTP.png" width="100px" alt="Logo">
                    </div>
                    <span class="navbar-burger burger" data-target="navbarMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>
                <div id="navbarMenu" class="navbar-menu">
                    <div class="navbar-end">
                        <span class="navbar-item">
                            <a class="button is-active" href="">
                                <span>Home</span>
                            </a>
                        </span>

                        <!--<span class="navbar-item">
                            <a class="button is-white is-outlined" href="{{ route('register') }}">
                                <span>Crear cuenta</span>
                            </a>
                        </span>
                        <span class="navbar-item">
                            <a class="button is-white is-outlined" href="{{ route('login') }}">
                                <span>Iniciar Sesión</span>
                            </a>
                        </span>-->
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="hero-body">
        <div class="container ">
            <div class="column is-6 is-offset-1">
                <h1 class="title is-size-1">
                    My Training Path
                </h1>
                <h2 class="subtitle">
                    Puedes rodearte de personas mediocres y creer que eres el mejor, o rodiarte de los mejores y seguir aprendiendo 
                </h2>
                <div class="">
                    <a class="button is-link is-rounded" href="{{ route('register') }}">INICIA YAAA!</a>
                    <p class="is-size-7">¿YA TIENES UNA CUENTA? <a class="has-text-link has-text-weight-bold" href="{{ route('login') }}">INICIA SESIÓN</a></p>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection