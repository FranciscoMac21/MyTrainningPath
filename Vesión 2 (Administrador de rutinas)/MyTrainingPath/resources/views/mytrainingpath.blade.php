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
                                <a class="button is-active" href="">
                                    <span>Home</span>
                                </a>
                            </span>

                            <div class="navbar-item has-dropdown is-hoverable is-black has-text-link">
                                <a class="navbar-link has-text-weight-bold">{{ auth()->user()->name}}</a>
                                <div class="navbar-dropdown is-black">
                                    <a class="navbar-item has-text-weight-bold">Profile</a>
                                    <a class="navbar-item has-text-success-dark has-text-weight-bold" href="/admin">Administrador</a>
                                    <hr class="navbar-divider">
                                    <div class="navbar-item is-black has-text-link has-text-weight-bold"><a href="{{ route('login.destroy') }}">Logout</a></div>
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
                            <p class="has-text-white">Progreso: 100%</p>
                            <progress class="progress is-link has-text-black" value="100" max="100">30%</progress>
                        
                        </div>
                        </br>
                        
                        <section class="info-tiles">
                            <table class="table is-bordered">

                                @if ($val == 1)
                                    <h1>Existe Personalizado</h1>
                                    <table class="table is-bordered">
                                            <thead>
                                            <tr>
                                                <th>Ejercicio</th>
                                                <th>Series</th>
                                                <th>Repeticiones</th>
                                            </tr>
                                            </thead>
                                            @foreach ($rutina->personalizadas as $rut )
                                            <tbody>
                                            <tr>
                                                <td>{{$rut->Ejercicios}}</td>
                                                <td>{{$rut->Series}}</td>
                                                <td>{{$rut->Repeticiones}}</td>
                                            </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                @endif

                                @if ($val == 2)
                                    <h1>Rutina solo principiante</h1>

                                        <table class="table is-bordered">
                                            <thead>
                                            <tr>
                                                <th>Ejercicio</th>
                                                <th>Series</th>
                                                <th>Repeticiones</th>
                                            </tr>
                                            </thead>
                                            @foreach ($rutina as $rut )
                                            <tbody>
                                            <tr>
                                                <td>{{$rut->Ejercicio}}</td>
                                                <td>{{$rut->series}}</td>
                                                <td>{{$rut->repeticiones}}</td>
                                            </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                @endif
                        </section>
						
                        <p class="title is-4 has-text-primary">Midamos tu nivel!</p>

                        <div class="box colorForm">
                            <p class="has-text-centered has-text-weight-bold has-text-white">¿Como fue tu experiencia con la primera semana de entrenamiento?</p>
                            </br>
                            <form action="" class="has-text-centered">
                                <button class="button is-danger">Difícil me cuesta hacer las rutinas <ion-icon name="sad-outline"></ion-icon></button>
                            </form>
                            </br>
                            <form action="" class="has-text-centered">
                                <button class="button is-link">Lo pude lograr pero con dificultad <ion-icon name="accessibility-outline"></ion-icon></button>
                            </form>
                            </br>
                            <form action="" class="has-text-centered">
                                <button class="button is-primary">Fáciles no tuve ningun problema <ion-icon name="happy-outline"></ion-icon></button>
                            </form>
                            </br>
                            <p class="has-text-centered has-text-success">¡Esto nos ayudara a medir tu nivel y establecer las rutinas apropiadas para ti!</p>
                        </div>
						
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

                        <figure class="image is-square">
                            <img class="is-inline-block" src="images/logo/fitness.png">
                        </figure>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection