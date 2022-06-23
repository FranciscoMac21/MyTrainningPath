@extends('admin.appAdmin')

@section('title', 'Admin Semana de Prueba')

@section('content')

<p class="title has-text-white has-text-centered has-text-weight-bold">Administrar Rutinas de Semana de Prueba</p>

<div class="columns">
    <div class="column box mr-2 ml-2">
        <p class="title is-5 has-text-centered has-text-primary-dark">Crear categoria de Rutinas para Semana de Prueba</p>

        <form action="{{route('adminRutinas.store')}}" method="post">
            @csrf
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Día de rutina</label>
                </div>
                <div class="field-body">
                    <div class="field is-narrow">
                    <div class="control">
                        <div class="select is-fullwidth">
                        <select type="text" id="txt_requerido2" name="dia">
                            <option selected="true" disabled value="">Seleccionar día</option>
                            <option value="Lunes">Lunes</option>
                            <option value="Martes">Martes</option>
                            <option value="Miércoles">Miércoles</option>
                            <option value="Jueves">Jueves</option>
                            <option value="Viernes">Viernes</option>
                        </select>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">categoría</label>
                </div>
                <div class="field-body">
                    <div class="field">
                    <div class="control">
                        <input class="input is-link" type="text" id="txt_requerido1" name="categoria" placeholder="Ejem. Empuje de torso">
                    </div>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label">
                    <!-- Left empty for spacing -->
                </div>
                <div class="field-body">
                    <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-primary" id="btn_submit" name="submit"  disabled>
                            Crear categoria
                        </button>
                    </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="column box  mr-4 ml-2">
        <p class="title is-5 has-text-centered has-text-link has-text-weight-bold">Lista de Rutinas de semana de prueba</p>
        
        @foreach($categoria as $cat)
        <div class="columns is-mobile">
            <div class="column">
                <div class="field">
                    <div class="control">
                        <div class="box has-background-dark">
                            <p class="title is-3 has-text-white has-text-centered has-text-weight-bold">{{$cat->dia}}</p>
                            <p class="subtitle has-text-link-dark has-text-centered">{{$cat->categoria}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column has-text-centered">
                <a class="button has-background-warning-dark has-text-white has-text-weight-bold" href="{{Route('agregarRutinasSemanaPrueba.idCat', $cat->id)}}">Agregar rutinas</a>
                <a class="button has-background-warning-dark has-text-white has-text-weight-bold" href="">Eliminar catego.</a>
            </div>
        </div>
        @endforeach

        
    </div>
</div>

<script>
    function habilitar(){
        txt_requerido1 = document.getElementById("txt_requerido1").value;
        txt_requerido2 = document.getElementById("txt_requerido2").value;
        val = 0;

        if(txt_requerido1 == ""){
            val++;
        }

        if(txt_requerido2 == ""){
            val++;
        }

        if(val == 0){
            document.getElementById("btn_submit").disabled = false;
        }else{
            document.getElementById("btn_submit").disabled = true;
        }
    }
    document.getElementById("txt_requerido1").addEventListener("keyup", habilitar);
    document.getElementById("txt_requerido2").addEventListener("select", habilitar);
</script>

@endsection