@extends('layouts.app')

@section('title', 'My Training Path')

@section('content')
   
	<section class="hero is-fullheight is-black">
        <div class="hero-head pb-6">
            <nav class="navbar is-fixed-top colorAzul">
                <div class="container is-black">
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
                                <a class="button is-white is-outlined" href="/mytrainingpath">
                                    <span>Home</span>
                                </a>
                            </span>

                            <span class="navbar-item">
                                <a class="button is-active" href="">
                                    <span>Alimentación</span>
                                </a>
                            </span>
                            <span class="navbar-item">
                                <a class="button is-white is-outlined" href="">
                                    <span>Ayúda</span>
                                </a>
                            </span>

                            <div class="navbar-item has-dropdown is-hoverable is-black has-text-link">
                                <a class="navbar-link has-text-weight-bold">{{ auth()->user()->name}}</a>
                                <div class="navbar-dropdown is-black">
                                    <a class="navbar-item">Profile</a>
                                    <a class="navbar-item">Settings</a>
                                    <hr class="navbar-divider">
                                    <div class="navbar-item is-black has-text-link"><a href="{{ route('login.destroy') }}">Logout</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        
		<div class="hero-body">
			<div class="container has-text-centered">
				<div class="columns is-8 is-variable ">
					<div class="column is-two-thirds has-text-left">
						<h1 class="title is-1 has-text-white">Guia básica sobre tu alimentación</h1>
						<img src="images/alimentacion/alimentacion.jpg" alt="">
                    </div>
					<div class="column is-one-third has-text-left">
                        <p class="menu-label has-text-weight-bold">
                            categorías
                        </p>
                        <ul class="menu-list">
                            <a href="#const" class="button has-background-light is-active has-text-left has-text-black has-text-weight-bold"> Saber más sobre tu entrenamiento</a>
                            <a href="#let" class="button has-background-light is-active has-text-left has-text-black has-text-weight-bold">Sobre tu progresión</a>
                            <a href="#let" class="button has-background-light is-active has-text-left has-text-black has-text-weight-bold">Referencias sobre tu entreno</a>
                            <a href="#let" class="button has-background-light is-active has-text-left has-text-black has-text-weight-bold"> ¿Por qué estoy haciendo esto?</a>
                        </ul>
                        <form action="">
                            <div class="field">
                                <label class="label has-text-white">Chat</label>
                                <div class="control">
                                    <textarea class="textarea" placeholder="Explícanos cómo podemos ayudarte"></textarea>
                                </div>
                                </div>

                                <div class="field is-grouped">
                                <div class="control">
                                    <button class="button is-link">Enviar</button>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection