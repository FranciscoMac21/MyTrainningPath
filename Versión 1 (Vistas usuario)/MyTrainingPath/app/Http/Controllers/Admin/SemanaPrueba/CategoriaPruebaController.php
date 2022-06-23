<?php

namespace App\Http\Controllers\Admin\SemanaPrueba;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Http\File;
use Illuminate\Support\facades\Storage;

use App\Models\Admin\SemanaPrueba\Categoria_Semana_Prueba;
use App\Models\Admin\SemanaPrueba\Rutina_Semana_Prueba;

class CategoriaPruebaController extends Controller
{

    public function adminRutinas(){
        $categorias = Categoria_Semana_Prueba::all();
        return view('admin.SemanaPrueba.adminRutinas', ['categoria'=>$categorias]);
    }
    
    public function store(Request $Request){

        $categoriaPrueba = new Categoria_Semana_Prueba;
        $categoriaPrueba->categoria=$Request->categoria;
        $categoriaPrueba->dia=$Request->dia;

        $categoriaPrueba->save();
       return redirect()->route('adminRutinas.index');
    }

    public function agregarRutinaSMP(){
        return view('admin.SemanaPrueba.agregarRutinasSemanaPrueba');
    }


    public function storeSMP(Request $Request){

        


        $insertarSMP = new Rutina_Semana_Prueba;
        $insertarSMP->categoria_semana_pruebas_id=$Request->idCategoria;
        $insertarSMP->nombre_rutina=$Request->nombre;

        if($Request->hasfile(key: 'video')){
            $insertarSMP->rutina=$Request->File(key:'video')->store(path:'rutinas/SemanaPrueba');

            //$insertarSMP->rutina=Storage::putFile('video', $request->file('rutinas/SemanaPrueba'));


            $size = $_FILES['video']['size'];
            
            $nombreVID=$_FILES['video']['name'];//obtiene el nombre
            $archivo=$_FILES['video']['tmp_name'];//contiene el archivo
            $ruta="rutinas/SemanaPrueba";
            $ruta=$ruta."/".$nombreVID;

            move_uploaded_file($archivo,$ruta);//mueve la imagen a la carpeta
        }
        


        $insertarSMP->descripcion=$Request->descripcion;

        $insertarSMP->save();
        return redirect()->route('agregarRutinasSMP.index');
    }

    public function idCategoria($id){

        $idCat = Rutina_Semana_Prueba::findOrFail($id);

        return view('agregarRutinasSMP.index', compact('idCat'));
    }

    
}
