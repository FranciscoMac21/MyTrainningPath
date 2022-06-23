@extends('layouts.app-MTP')

@section('title', 'Registrar')

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
                            <a class="button is-active" href="">
                                <span>Crear cuenta</span>
                            </a>
                        </span>
                        <span class="navbar-item">
                            <a class="button is-white is-outlined" href="{{ route('login') }}">
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
                    <h3 class="title">Registrate</h3>
                    <hr class="login-hr">
                    <div class="">
                        <form action="" method="POST">
                            @csrf
                            <div class="field">
                                <div class="control has-icons-left">
                                    <input type="text" class="input is-large" id="name" name="name" placeholder="Nombre" autofocus="">
                                    <span class="icon is-small is-left has-text-black">
                                        <ion-icon name="person-outline"></ion-icon>
                                    </span>
                                </div>
                            </div>

                            @error('name')
                                <p class="has-text-danger">{{$message}}</p>
                                </br>
                            @enderror

                            <div class="field">
                                <div class="control has-icons-left">
                                    <input type="email" class="input is-large" id="email" name="email" placeholder="Email" autofocus="">
                                    <span class="icon is-small is-left has-text-black">
                                        <ion-icon name="mail-outline"></ion-icon>
                                    </span>
                                </div>
                            </div>



                            @error('email')
                                <p class="has-text-danger">{{$message}}</p>
                                </br>
                            @enderror

                            <div class="field">
                                <div class="control has-icons-left">
                                    <input type="password" class="input is-large" id="password" name="password" placeholder="Contraseña">
                                    <span class="icon is-small is-left has-text-black">
                                        <ion-icon name="lock-closed-outline"></ion-icon>
                                    </span>                                
                                </div>
                            </div>

                            @error('password')
                                <p class="has-text-danger">{{$message}}</p>
                                </br>
                            @enderror

                            <div class="field">
                                <div class="control has-icons-left">
                                    <input type="password" class="input is-large" id="password_confirmation" name="password_confirmation" placeholder="Confirmar contraseña">
                                    <span class="icon is-small is-left has-text-black">
                                        <ion-icon name="lock-closed-outline"></ion-icon>
                                    </span>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input type="hidden" class="input is-large" id="discapacidad" name="discapacidad" placeholder="Discapacidad" value="S" autofocus="">
                                </div>
                            </div>

                            <button type="submit" class="button is-block is-info is-large is-fullwidth">Registrar <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                            </br>
                            <p class="is-size-7">¿YA TIENES UNA CUENTA? <a class="has-text-link">INICIA SESIÓN</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection