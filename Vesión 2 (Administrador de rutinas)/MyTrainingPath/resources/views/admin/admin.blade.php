<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css"/>
    <title>Document</title>
</head>
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="/mytrainingpath">
        Home
      </a>

      <a class="navbar-item" href="/admin/personalizado">
        Rutinas personalizadas
      </a>


      </div>
    </div>

  </div>
</nav>
    <div class="container">
        <p class="title is-4">Admin - Rutina principiante</p>
        <div class="box">
            <div class="media">
                <div class="media-content">
                    <button class="button is-medium is-fullwidth is-rounded" data-modal="modal">Personalizar rutina</button>
                    <div class="modal">
                        <div class="modal-background"></div>
                        <div class="modal-content">
                            <!-- Any other Bulma elements you want -->
                            <div class="card">
                                <div class="card-content">
                                    <div class="content">
                                        <!--Formulario de publicacion-->
                                        <form action="/admin/personalizar" method="post" enctype="multipart/form-data">
                                            @csrf
        
                                            <div class="field">
                                            <label class="label">Seleccionar usuario</label>
                                            <div class="control">
                                                <select class="input is-link" name="usuario">
                                                    @foreach ($usuario as $user)
                                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                                    @endforeach    
                                                </select>
                                                <label class="label">Ejercicio</label>
                                                <input class="input is-link" type="text" name="ejercicio" placeholder="Ejercicio">

                                                <label class="label">Series</label>
                                                <input class="input is-link" type="text" name="series" placeholder="Series">

                                                <label class="label">Repeticiones</label>
                                                <input class="input is-link" type="text" name="repeticiones" placeholder="Repeticiones">
                                            </div>
                                            </div>
        
                                            <div class="box">
                                               
                                                <div class="control">
                                                <button class="button is-block is-fullwidth is-medium is-rounded" type="submit" id="btn_submit" name="submit">
                                                    Publicar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="modal-close is-large" aria-label="close"></button>
                    </div>
                </div>
            </div>
            </div>
                                                
                
        </div>
<h2>Principiante</h2>
    <table class="table is-bordered">
        <thead>
          <tr>
            <th>Ejercicio</th>
            <th>Series</th>
            <th>Repeticiones</th>
          </tr>
        </thead>
        @foreach ($principiante as $prin )
        <tbody>
          <tr>
            <td>{{$prin->Ejercicio}}</td>
            <td>{{$prin->series}}</td>
            <td>{{$prin->repeticiones}}</td>
          </tr>
        </tbody>
        @endforeach
      </table>

      <!--Ventana Modal-->
<script>
    let buttonModal = document.querySelector('.button')
    const openModal =(OpenModalButton, ModalWindow) => {
        if(buttonModal.dataset.modal == 'modal'){
            OpenModalButton.addEventListener('click', ()=>{
                ModalWindow.classList.add('is-active')
            })
        }
    }

    const closeModal = (ModalWindow) =>{
        ModalWindow.addEventListener('click', e=>{
            const elementClose = e.target
            if(elementClose.classList.contains('modal-close') || elementClose.classList.contains('modal-background')){
                ModalWindow.classList.remove('is-active')
            }
        })
    }

    const Modal = ModalWindow => {
        openModal(document.querySelector('.button'), ModalWindow)
        closeModal(ModalWindow)
    }

    Modal(document.querySelector('.modal'))
</script>
</body>
</html>