@extends('admin.appAdmin')

@section('title', 'Agregar Rutinas')

@section('content')

<p class="title has-text-white has-text-centered has-text-weight-bold">Admin. Creando rutinas para el dia Lunes</p>

<div class="columns">
    <div class="column box mr-2 ml-2">
        <p class="title is-5 has-text-centered has-text-primary-dark">Crea las rutinas para el dia lunes</p>

        <form action="{{route('agregarRutinasSemanaPrueba.storeSMP')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Nombre Rutina</label>
                </div>
                <div class="field-body">
                    <div class="field">
                    <div class="control">
                        <input class="input is-link" type="text" id="txt_requerido1" name="nombre" placeholder="Ejem. Sentadillas">
                    </div>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Descrip.</label>
                </div>
                <div class="field-body">
                    <div class="field">
                    <div class="control">
                    <textarea class="textarea is-link" name="descripcion" placeholder="Deja una descripción para que todos sepan la función de tu rutina..."></textarea>
                    </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <label class="label">Seleccione el video de la rutina para subir</label>
                <div class="file">
                    <label class="file-label">
                        <input type="file" accept="video/*" class="file-input" id="file" name="video" onchange="vista_preliminar(event)" required>
                        <span class="file-cta">
                            
                            <ion-icon name="videocam-outline"></ion-icon>

                        </span>
                    </label>
                </div>
                <div class="has-text-centered" id="videopre" style="display:none"><video src='' id="img-foto" controls width='30%' height='50px' class="is-inline-block"></div>

                <div class="has-text-centered" id="videopre" style="display:none"><video src='' id="img-foto" controls width='30%' height='50px' class="is-inline-block"></div>

            </div>

            <div class="field is-horizontal">
                <div class="field-label">
                    <!-- Left empty for spacing -->
                </div>
                <div class="field-body">
                    <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-primary" id="btn_submit" name="submit"  disabled>
                            Crear rutina
                        </button>
                    </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="column box  mr-4 ml-2">
        <p class="title is-5 has-text-centered has-text-link has-text-weight-bold">Lista de Rutinas dia Lunes</p>
        
        
        <div class="columns is-mobile">
            <div class="column">
                <div class="field">
                    <div class="control">
                        <div class="box has-background-dark">
                            <p class="title is-3 has-text-white has-text-centered has-text-weight-bold">hola</p>
                            <p class="subtitle has-text-link-dark has-text-centered">hola</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column has-text-centered">
                <a class="button has-background-warning-dark has-text-white has-text-weight-bold" href="">Agregar rutinas</a>
                <a class="button has-background-warning-dark has-text-white has-text-weight-bold" href="">Eliminar catego.</a>
            </div>

            {{$idCat->id}}

        </div>
    </div>
</div>

<script>
    function habilitar(){
        txt_requerido1 = document.getElementById("txt_requerido1").value;
        //txt_requerido2 = document.getElementById("txt_requerido2").value;
        val = 0;

        if(txt_requerido1 == ""){
            val++;
        }

        /*if(txt_requerido2 == ""){
            val++;
        }*/

        if(val == 0){
            document.getElementById("btn_submit").disabled = false;
        }else{
            document.getElementById("btn_submit").disabled = true;
        }
    }
    document.getElementById("txt_requerido1").addEventListener("keyup", habilitar);
    //document.getElementById("txt_requerido2").addEventListener("select", habilitar);
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