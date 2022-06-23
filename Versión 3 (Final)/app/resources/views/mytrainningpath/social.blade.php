@extends('layouts.app-MTP')

@section('title', 'Social Fitness')

@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
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
                                <a class="button  is-primary has-text-weight-bold is-outlined" href="/mimusica">
                                    <span>Conocer playList Spotify <ion-icon name="musical-notes-outline"</span>
                                </a>
                            </span>

                            <span class="navbar-item">
                                <a class="button is-active is-link has-text-weight-bold has-text-white" href="/social">
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

        <section class="section">
            <div class="container">
                <div class="columns">
                <div class="column is-3">
                    <aside class="is-medium menu">
                        <p class="menu-label has-text-white">
                            Compartir tu mundo fitness <ion-icon name="sunny-outline"></ion-icon>
                        </p>
                        <div class="box has-background-grey-dark">
                        <form action="/social/insert" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="field">
                                <label class="label has-text-white">Descibe tu mundo:</ion-icon></label>
                                    <div class="control">
                                        <textarea class="textarea is-link" placeholder="Describir..." name="descripcion" required></textarea>
                                    </div>
                            </div>

                            <div class="field">
                                    <div class="control">
                                    <div class="div"><img class="image is-96x96"  style="display:none" src="" id="img-foto" alt=""></div>
                                    </div>
                            </div>

                            <label class="label has-text-white">Agregar Imagen:</ion-icon></label>
                                <div class="file is-inline-block">
                                
                                    <label class="file-label">
                                        <input type="file" accept="image/*" class="file-input" id="foto" name="imagen" onchange="vista_preliminar(event)">
                                        <span class="file-cta has-background-warning">
                                            <ion-icon name="image-outline"></ion-icon>
                                        </span>
                                    </label>

                                    
                                    
                                    
                                    
                                </div>
                            <button class="button is-info is-fullwidth mt-2" type="sumbit">Publicar</button>
                        </form>
                        </div>
                    </aside>
                </div>
                <div class="column is-8">
                        <div class="content is-medium">
                        <h3 class="title is-4 has-text-white">Social Fitness <ion-icon name="people-outline"></ion-icon></h3>
                        @foreach($social as $s)
                            
                        <div class="card has-background-dark mb-3">
                            <div class="header">
                                <div class="media">
                                    <div class="media-left">
                                        <figure class="image is-48x48">
                                            <img class="is-rounded" src="{{$s->user->foto}}" alt="Placeholder image">
                                        </figure>
                                    </div>
                                    <div class="media-content">
                                        <p class="title is-4">{{$s->user->name}}</p>
                                        <p class="subtitle is-6">{{$s->user->email}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-image">
                                @if($s->imagen)
                                <figure class="image is-4by3">
                                    <img src="{{$s->imagen}}" alt="Placeholder image">
                                </figure>
                                @endif
                            </div>
                            <div class="card-content has-text-white">
                                <div class="level is-mobile">
                                    <div class="level-left">
                                        <div class="level-item has-text-centered">
                                            <a href="">
                                                <i class="material-icons">favorite_border</i>
                                            </a>
                                        </div>
                                        <div class="level-item has-text-centered">
                                            <div>
                                                <a href="">
                                                    <i class="material-icons">chat_bubble_outline</i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <time datetime="2018-1-1">{{$s->created_at}}</time>
                                </div>

                                <div class="content has-text-justified">
                                {{$s->descripcion}}
                                    <br>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
	</section>                          


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
            document.getElementById('img-foto').style.display = '';
        }
    </script>
@endsection