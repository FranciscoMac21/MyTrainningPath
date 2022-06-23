<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Social;

class socialController extends Controller
{
    //

    public function index(){
        
        $socialfitt = Social::all();

        return view('mytrainningpath.social', ['social'=>$socialfitt]);
    }

    public function store(Request $Request){

        $social = new Social;

        if($Request->hasfile(key: 'imagen')){
            $nombreVID=$_FILES['imagen']['name'];//obtiene el nombre
            $ruta="images/social";
            $ruta=$ruta."/".$nombreVID;
            $social->imagen=$ruta;
            
            $nombreVID=$_FILES['imagen']['name'];//obtiene el nombre
            $archivo=$_FILES['imagen']['tmp_name'];//contiene el archivo
            $ruta="images/social";
            $ruta=$ruta."/".$nombreVID;

            move_uploaded_file($archivo,$ruta);//mueve la imagen a la carpeta
        }
        $social->descripcion = $Request->descripcion;
        $social->user_id =  Auth()->user()->id;

        $social->save();

        return redirect()->route('mytrainningpath/social');

    }
}
