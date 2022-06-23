<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Full;
use App\Models\Trenin;
use App\Models\Tren;

class RutinaController extends Controller
{
    //
    /*public function rutina(){

        $userNivel = Auth()->user()->nivel_id;

        if($userNivel == 1 ){
            $datoRutinas = Full::all();
        }elseif($userNivel == 2){
            $datoRutinas = Trenin::all();
        }elseif($nivel == 3){
            $datoRutinas = Tren::all();
        }


        return view('admin.video', ['datosRutina'=>$datoRutinas]);
    }*/
}
