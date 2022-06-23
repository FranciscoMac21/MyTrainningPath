@extends('layouts.app')

@section('title', 'Login')

@section('content')

<section class="hero is-link is-fullheight">
    <div class="hero-head colornav">
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
                            <a class="button is-white is-outlined" href="/">
                                <span>Home</span>
                            </a>
                        </span>
                        <span class="navbar-item">
                            <a class="button is-white is-outlined" href="{{Route('register.index')}}">
                                <span>Crear cuenta</span>
                            </a>
                        </span>
                        <span class="navbar-item">
                            <a class="button is-active" href="">
                                <span>Iniciar Sesión</span>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="hero-body backAzul">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <div class="box colorform">
                    <h3 class="title">Iniciar sesión</h3>
                    <hr class="login-hr">
                    <p class="subtitle">Please login to proceed.</p>
                    <div class="">
                        <!--<figure class="avatar">
                            <img src="https://placehold.it/128x128">
                        </figure>-->
                        <form action="" method="POST">
                            @csrf
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="email" id="email" name="email" placeholder="Email" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="password" id="password" name="password" placeholder="Contraseña">
                                </div>
                            </div>
                            <div class="field">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    Remember me
                                </label>
                            </div>

                            @error('message')
                                <p class="has-text-danger">{{$message}}</p>
                                </br>
                            @enderror

                            <button type="submit" class="button is-block is-info is-large is-fullwidth">Iniciar Sesión <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <p class="has-text-grey">
                        <a href="../">Sign Up</a> &nbsp;·&nbsp;
                        <a href="../">Forgot Password</a> &nbsp;·&nbsp;
                        <a href="../">Need Help?</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection