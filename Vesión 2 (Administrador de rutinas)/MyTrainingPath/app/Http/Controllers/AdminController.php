<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Principiante;
use App\Models\Personalizada;

class AdminController extends Controller
{
    public function index(){

        $prin = Principiante::all();
        $user = User::all();
        

        return view('admin.admin', ['principiante'=>$prin], ['usuario'=>$user]);
    }

    public function personalizada(){
        $perso = Personalizada::all();
        return view('admin.personalizado', ['perso'=>$perso]);
    }

    public function store(Request $Request){
        $personalizado = new Personalizada;

        $personalizado->user_id=$Request->usuario;
        $personalizado->Ejercicios=$Request->ejercicio;
        $personalizado->series=$Request->series;
        $personalizado->repeticiones=$Request->repeticiones;

        $personalizado->save();

        return redirect()->route('admin/admin');

    }

    public function delete(Request $request){

        $id = $request->id;
        $idea = Personalizada::findOrFail($id);
        $idea->delete();
        return redirect()->route('admin/personal');
    }
}
