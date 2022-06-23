@extends('layouts.app-MTP')

@section('title', 'My Training Path')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
	<section class="hero is-fullheight fondoperfilCard is-black">
        <div class="hero-head">
            <nav class="navbar colorAzul">
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
        
		<div class="fondoperfilCard">
			<div class="">
				<div class="columns">
                    <div class="column is-4">
                        <div class="box has-text-centered cardper">
                            <figure class="image is-96x96 is-inline-block">
                                <img class="is-rounded" src="{{ auth()->user()->foto}}">
                            </figure>
                            <p class="title is-4 has-text-link has-text-weight-bold"> {{ auth()->user()->name}}</p>
                            <p class="subtitle is-6 has-text-black">{{ auth()->user()->email}}</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="has-background-warning-dark" data-toggle="modal" data-target="#exampleModalCenter">
                            Editar perfil
                            </button>
                            <label class="label has-text-left">Nivel {{ auth()->user()->nivel_id}}</label>
                            <progress class="progress is-link" value="0" max="100">0%</progress>
                            <p class="has-text-left"><strong>Peso: </strong>{{ auth()->user()->peso}} kg</p>
                            <p class="has-text-left"><strong>Altura: </strong>{{ auth()->user()->altura}} cm</p>
                            <h2 class="title is-6 has-text-black has-text-left">Descripción</h2>
                            <p class="box has-text-justified has-text-weight-bold">{{ auth()->user()->descripcion}}</p>

                            <!-- Modal -->
                            <div class="modal fade fondoperfilCard" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered " role="document">
                                <div class="modal-content">
                                <div class="modal-header modalfondo">
                                    <h5 class="modal-title text-center" id="exampleModalLongTitle">Editar Perfil</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body modalfondo has-text-right">
                                <form action="/perfil/delete" method="post">
                                    @csrf
                                    <input class="input" type="hidden" name="id" value="{{ auth()->user()->id}}"></input>
                                    <label class="label">Eliminar cuenta <button class="has-background-danger" type="submit"><ion-icon name="trash-outline"></ion-icon></button></label>
                                    
                                </form>
                                    <form action="/perfil/update" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <section class="">
                                        <!-- Content ... -->
                                            <div class="">
                                                <div class="card-content has-text-right">
                                                    <div class="content">
                                                        <div class="header has-text-centered">
                                                            <figure class="image is-64x64 is-inline-block">
                                                                <img class="image is-rounded is-64x64" id="img-foto" src="{{ auth()->user()->foto}}" alt="Placeholder image">
                                                            </figure>
                                                        </div>
                                                        <div class="column has-text-centered">
                                                            <div class="file is-inline-block">
                                                                <label class="file-label">
                                                                    <input type="file" id="file" accept="image/*" class="file-input" id="file" name="fotoPerfil" value="" onchange="vista_preliminar(event)">
                                                                    <span class="file-cta has-background-warning">
                                                                        cambiar foto
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="media-content">
                                                            <input class="input" type="hidden" name="fotoperfil" value=""></input>

                                                            <input class="input" type="hidden" name="id" value="{{ auth()->user()->id}}"></input>
                                                            
                                                            
                                                            
                                                        </div>
                                                        <div class="field is-horizontal">
                                                            <div class="field-label is-normal">
                                                                <label class="label">Nombre</label>
                                                            </div>
                                                            <div class="field-body">
                                                                <div class="field">
                                                                <p class="control is-expanded has-icons-left">
                                                                <input class="input is-link" type="text" id="txt_requerido1" name="nombre" placeholder="Nombre" value="{{ auth()->user()->name}}"></input>
                                                                    <span class="icon is-small is-left">
                                                                    <i class="fas fa-user"></i>
                                                                    </span>
                                                                </p>
                                                                </div>
                                                
                                                            </div>
                                                        </div>

                                                        <div class="field is-horizontal">
                                                            <div class="field-label is-normal">
                                                                <label class="label">Peso</label>
                                                            </div>
                                                            <div class="field-body">
                                                                <div class="field">
                                                                <p class="control is-expanded has-icons-left">
                                                                <input class="input is-link" type="text" id="txt_requerido2" name="peso" placeholder="Peso" value="{{ auth()->user()->peso}}"></input>
                                                                    <span class="icon is-small is-left">
                                                                    <i class="fas fa-user"></i>
                                                                    </span>
                                                                </p>
                                                                </div>
                                                
                                                            </div>
                                                        </div>

                                                        <div class="field is-horizontal">
                                                            <div class="field-label is-normal">
                                                                <label class="label">Altura</label>
                                                            </div>
                                                            <div class="field-body">
                                                                <div class="field">
                                                                <p class="control is-expanded has-icons-left">
                                                                <input class="input is-link" type="text" id="txt_requerido3" name="altura" placeholder="Altura" value="{{ auth()->user()->altura}}"></input>
                                                                    <span class="icon is-small is-left">
                                                                    <i class="fas fa-user"></i>
                                                                    </span>
                                                                </p>
                                                                </div>
                                                
                                                            </div>
                                                        </div>

                                                        <div class="field is-horizontal">
                                                            <div class="field-label is-normal">
                                                                <label class="label">Descri.</label>
                                                            </div>
                                                            <div class="field-body">
                                                                <div class="field">
                                                                <div class="control">
                                                                    <textarea class="textarea is-link" rows="1" name="descripcion" placeholder="Descripción...">{{ auth()->user()->descripcion}}</textarea>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <footer class="">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <button class="button is-success" id="btn_submit" type="submit">Guardar</button>
                                        </footer>
                                    </form>
                                </div>

                                </div>
                            </div>
                            </div>
                            
                        </div> 
                    </div>
                    <div class="column">
                        <div class="columns">
                            <div class="column">
                                <div class="box">
                                    <h2 class="title is-size-3 has-text-black has-text-weight-bold">Entrenamientos semanal</h2>
                                    <ul>
                                        
                                        <li class="is-size-4 has-text-link has-text-weight-bold">35 ejercicios</li>
                                        
                                    </ul>
                                </div>                           
                            </div>
                        
                            <div class="column">
                                <div class="box">
                                    <h2 class="title is-size-3 has-text-black has-text-weight-bold">Duración total semana</h2>
                                    <ul>
                                       
                                        <li class="is-size-4 has-text-link has-text-weight-bold">10 hrs</li>
                                        
                                    </ul>
                                </div>
                            </div>
                        
                        </div>

                        <div class="columns">
                            <div class="column">
                                <div class="box">
                                    <h2 class="title is-size-3 has-text-black has-text-weight-bold">Kcal Total</h2>
                                    <ul>
                                        
                                        <li class="is-size-4 has-text-link has-text-weight-bold">0 kcal</li>
                                        
                                    </ul>
                                </div>                           
                            </div>
                        
                            <div class="column">
                                <div class="box">
                                    <h2 class="title is-size-3 has-text-black has-text-weight-bold">Kcal día Viernes</h2>
                                    <ul>
                                       
                                        <li class="is-size-4 has-text-link has-text-weight-bold">0 kcal</li>
                                        
                                    </ul>
                                </div>
                            </div>
                        
                        </div>
                        
                    </div>
                </div>
			</div>
		</div>
	</section>                          

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!--Previsualizar imagen antes de subir-->
    <script>
        let vista_preliminar = (event)=>{
           
            let leer_img = new FileReader();
            let id_img = document.getElementById('img-foto');

            leer_img.onload = ()=>{
                if(leer_img.readyState == 2){
                    id_img.src = leer_img.result
                }
            }

            leer_img.readAsDataURL(event.target.files[0])
        }
    </script>


@endsection