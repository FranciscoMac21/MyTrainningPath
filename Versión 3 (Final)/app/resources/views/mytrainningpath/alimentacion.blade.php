@extends('layouts.app-MTP')

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
                                <a class="button is-white has-text-weight-bold is-outlined" href="/home">
                                    <span>Home</span>
                                </a>
                            </span>

                            <span class="navbar-item">
                                <a class="button is-warning is-active has-text-weight-bold" href="/alimentacion">
                                    <span>Alimentación</span>
                                </a>
                            </span>

                            <span class="navbar-item">
                                <a class="button is-primary has-text-weight-bold is-outlined" href="/mimusica">
                                    <span>Conocer playList Spotify <ion-icon name="musical-notes-outline"</span>
                                </a>
                            </span>

                            <span class="navbar-item">
                                <a class="button is-link has-text-weight-bold is-outlined has-text-white" href="/social">
                                    <span>Social Fitness <ion-icon name="people-outline"></span>
                                </a>
                            </span>
                            
                            <span class="navbar-item">
                                <a class="button is-link has-text-weight-bold is-outlined" href="">
                                    <span>Ayúda</span>
                                </a>
                            </span>

                            <div class="navbar-item has-dropdown is-hoverable is-black has-text-link">
                                <a class="navbar-link has-text-weight-bold" href="/perfil" style="border: 1px solid #004DFF; background-color: #00123B;">
                                    <figure class="image is-24x24">
                                        <img class="is-rounded" src="{{ auth()->user()->foto}}">
                                    </figure>{{ auth()->user()->name}}
                                </a>
                                <div class="navbar-dropdown is-black">
                                    <a class="navbar-item has-text-weight-bold" href="/perfil">Profile</a>
                                    @if(auth()->user()->id == 1 or auth()->user()->id == 2)
                                        <a class="navbar-item has-text-success-dark has-text-weight-bold" href="/homeAdmin">Administrador</a>
                                    @endif
                                    <hr class="navbar-divider">
                                    <div class="navbar-item is-black has-text-link has-text-weight-bold"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></div>
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
                        <section class="info-tiles">
                            @foreach($guia as $g)
                            <div class="card mb-2 has-background-dark">
                                <div class="header">
    
                                    <div class="media">
                                        <div class="card-content">
                                            <p class="title is-2">{{$g->Titulo}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content has-text-justified m-2 has-text-white">
                                    <p>{{$g->Descripcion}}</p>
                                </div>
                            </div>
                            @endforeach
                        </section>
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
                        <figure class="image is-square">
                            <img class="is-inline-block" src="images/logo/fitness.png">
                        </figure>
					</div>
				</div>
			</div>
	</section>

@endsection