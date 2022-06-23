<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Principiante;
use App\Models\Personalizada;
use App\Models\User;

class TranningController extends Controller
{
    public function index(){

        $personalizada = Personalizada::all();
        $tiene = 0;
        foreach($personalizada as $per){
            if($per->user_id == Auth()->user()->id){
                $tiene +=1;
            }
        }

        if($tiene>0){
            $valor = 1;
            $rutina = Auth()->user();
        }else{
            $valor = 2;
            $rutina = Principiante::all();
        }


        return view('mytrainingpath', ['rutina'=>$rutina], ['val'=>$valor]);
    }
}
