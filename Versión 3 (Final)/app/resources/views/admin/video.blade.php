@extends('layouts.app')
@section('title', __('Dashboard'))
@section('content')
<!-- Bulma Version 0.9.0-->
<link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />

<div class="container">
<p class="title is-4">Videos Rutina principiante</p>
<div class="box">
    <div class="media">
        <div class="media-content">
            <button class="button is-medium is-fullwidth is-rounded" data-modal="modal">Subir Video</button>
            <div class="modal">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <!-- Any other Bulma elements you want -->
                    <div class="card">
                        <div class="card-content">
                            <div class="content">
                                <!--Formulario de publicacion-->
                                <form action="/video/update" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="field">
                                    <label class="label">Ejercicio</label>
                                    <div class="control">
                                        <select class="input is-link" name="ejercicio">
                                        <p class="title">Ejercicio Trens</p>
                                            @foreach($video as $tre)
                                            <option value="{{$tre->id}}">{{$tre->Ejercicios_id}}</option>
                                            
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                    </div>

                                    <div class="box">
                                        Agregar video:
                                        <div class="file">
                                            <label class="file-label">
                                                <input type="file" accept="video/*" class="file-input" id="file" name="video" onchange="vista_preliminar(event)">
                                                <span class="file-cta">
                                                    <ion-icon name="videocam-outline"></ion-icon>
                                                </span>
                                            </label>
                                        </div>
                                        <p class="has-text-danger">Máximo 25 MB</p>
                                        <!--Previsualización-->
                                        <div class="has-text-centered" id="videopre" style="display:none"><video src='' id="img-foto" controls width='30%' height='50px' class="is-inline-block"></div>
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

<table class="table is-bordered">
  <thead>
    <tr>
      <th>id</th>
      <th>Ejercicio</th>
      <th>Dirección</th>
      <th>Video</th>
    </tr>
  </thead>
  @foreach($video as $vid)
  <tbody>
    <tr>
      <th>{{$vid->id}}</th>
      <td>{{$vid->Ejercicios_id}}</td>
      <td>{{$vid->Direccion}}</td>
      <td><div class="has-text-centered"><video src='{{$vid->Direccion}}' controls width='35%' height='50px'></div></td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

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
            document.getElementById('videopre').style.display = '';
        }
    </script>
@endsection