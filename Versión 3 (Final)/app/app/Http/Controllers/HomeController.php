<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use App\Models\Full;
use App\Models\Tren;
use App\Models\Trenin;
use App\Models\guia;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('mytrainningpath.mytrainningpath');
    }

    public function homeAdmin()
    {
        return view('home');
    }

    public function alimentacion()
    {
        $guias = guia::all();
        return view('mytrainningpath.alimentacion', ['guia'=>$guias]);
    }

    public function ejercicio()
    {
        return view('admin.ejercicios.index');
    }

    public function rutina()
    {
        $userNivel = Auth()->user()->nivel_id;

        if($userNivel == 1 ){
            $datoRutinas = Full::all();
        }elseif($userNivel == 2){
            $datoRutinas = Trenin::all();
        }elseif($userNivel == 3){
            $datoRutinas = Tren::all();
        }

        return view('mytrainningpath.rutina', ['datosRutina'=>$datoRutinas]);
    }

    public function perfil()
    {
        $perfiles =  Auth()->user()->email;
        return view('mytrainningpath.perfil',['perfil'=>$perfiles]);
    }

    public function update(Request $request){

        $id = $request->id;

        $perfil = User::findOrFail($id);

        if($request->hasfile(key: 'fotoPerfil')){
            $nombreVID=$_FILES['fotoPerfil']['name'];//obtiene el nombre
            $ruta="images/perfil";
            $ruta=$ruta."/".$nombreVID;
            $perfil->foto=$ruta;
            
            $nombreVID=$_FILES['fotoPerfil']['name'];//obtiene el nombre
            $archivo=$_FILES['fotoPerfil']['tmp_name'];//contiene el archivo
            $ruta="images/perfil";
            $ruta=$ruta."/".$nombreVID;

            move_uploaded_file($archivo,$ruta);//mueve la imagen a la carpeta
        }

        $perfil->name=$request->nombre;
        $perfil->peso=$request->peso;
        $perfil->altura=$request->altura;
        $perfil->descripcion=$request->descripcion;

        $perfil->save();

        return redirect()->route('mytrainningpath/perfil');

    }

    public function delete(Request $request){

        $id = $request->id;
        $idea = User::findOrFail($id);
        $idea->delete();
        return redirect()->route('mytrainningpath/perfil');
    }
}
