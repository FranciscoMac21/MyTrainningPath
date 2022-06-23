@extends('layouts.app')

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

                        <span class="navbar-item">
                            <a class="button is-white is-outlined" href="{{Route('register.index')}}">
                                <span>Crear cuenta</span>
                            </a>
                        </span>
                        <span class="navbar-item">
                            <a class="button is-white is-outlined" href="{{Route('login.index')}}">
                                <span>Iniciar Sesión</span>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-6 is-offset-3">
                <h1 class="title">
                    My Training Path
                </h1>
                <h2 class="subtitle">
                    Puedes rodearte de personas mediocres y creer que eres el mejor, o rodiarte de los mejores y seguir aprendiendo 
                </h2>
                <div class="">
                    <a class="button is-link is-rounded" href="{{Route('register.index')}}">EMPEZAR</a>
                    <p class="is-size-7">¿YA TIENES UNA CUENTA? <a class="has-text-link has-text-weight-bold" href="{{Route('login.index')}}">INICIA SESIÓN</a></p>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection