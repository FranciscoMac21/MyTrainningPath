@extends('layouts.app-MTP')

@section('title', 'My Training Path')

@section('content')
   
	<section class="hero is-fullheight is-black">
        <div class="hero-head">
            <nav class="navbar  colorAzul">
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
                                <a class="button is-active has-text-weight-bold" href="/home">
                                    <span>Home</span>
                                </a>
                            </span>

                            <span class="navbar-item">
                                <a class="button is-warning has-text-weight-bold is-outlined" href="/alimentacion">
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
						<h1 class="title is-1 has-text-white">Semana de prueba</h1>
                        <div>
                            <p class="has-text-white">Progreso: 0%</p>
                            <progress class="progress is-link has-text-black" value="0" max="100">30%</progress>
                        
                        </div>
                        </br>
                       
                        <p class="has-text-danger"></p>
                        
                        <section class="info-tiles">
                            @foreach($datosRutina as $dato)
                            <div class="card mb-2 has-background-dark">
                                <div class="header">
    
                                    <div class="media">
                                        <div class="card-content">
                                            <p class="title is-2">{{$dato->Ejercicios_id}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-image m-2">
                                    <video src='{{$dato->Direccion}}' controls width='100%' height='50px'>
                                </div>
                                <div class="card-content">
                                    <div class="level is-mobile">
                                        <div class="level-left">
                                            <div class="level-item has-text-centered has-text-white">
                                                <a href="">
                                                    <p class="has-text-weight-bold is-size-4 has-text-warning">Series: <strong class="has-text-link">{{$dato->SobrecargaS_id}}</strong></p>
                                                </a>
                                            </div>
                                            <div class="level-item has-text-centered has-text-white">
                                                <div>
                                                    <a href="">
                                                        <p class="has-text-weight-bold is-size-4 has-text-warning">Repeticiones: <strong class="has-text-link">{{$dato->SobrecargaR_id}}</strong></p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
		</div>
	</section>

@endsection