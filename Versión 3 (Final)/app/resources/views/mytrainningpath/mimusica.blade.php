@extends('layouts.app-MTP')

@section('title', 'Mi musica')

@section('content')
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
                                <a class="button is-active is-primary has-text-weight-bold" href="/mimusica">
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
        
		<section class="section">
            <div class="container">
                <div class="columns">
                <div class="column is-3">
                    <aside class="is-medium menu">
                        <p class="menu-label has-text-white">
                            Compartir mi PlayList Spotify
                        </p>
                        <form action="/musica/insert" method="post">
                            @csrf
                            <div class="field">
                                <label class="label has-text-link">Link de tu PlayList <ion-icon name="musical-notes-outline"></ion-icon></label>
                                    <div class="control">
                                        <input class="input is-link" type="text" name="playlist" placeholder="link..." required>
                                    </div>
                            </div>
                            <button class="button is-info is-fullwidth" type="sumbit">Compartir</button>
                        </form>
                    </aside>
                </div>
                <div class="column is-9">
                <p class="has-text-primary title is-4">Comparte tu playList de Spotify, para que todos sepan con que música entrenas!!!</p>
                    <div class="content is-medium">
                <h3 class="title is-3 has-text-white">Playlist <ion-icon name="musical-notes-outline"></ion-icon></h3>
                    @foreach($play as $p)
                    <div class="box has-background-dark">
                        <div class="media">
                            <div class="media-left">
                                <figure class="image is-48x48">
                                    <img class="is-rounded" src="{{$p->user->foto}}" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="media-content">
                                <p class="title is-4 has-text-white">{{$p->user->name}}</p>
                                <p class="subtitle is-6">{{$p->user->email}}</p>
                            </div>
                        </div>
                        
                        <article class="message is-primary">
                        <iframe src="https://open.spotify.com/embed?uri=spotify:{{$p->tipo}}:{{$p->playlist}}" width="100%" height="200" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                        
                    </div>
                    @endforeach
                </div>
            </div>
            </div>
        </div>
        </div>
        </section>
	</section>                          

@endsection