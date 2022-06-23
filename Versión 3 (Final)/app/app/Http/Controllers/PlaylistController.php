<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Playlist;

class PlaylistController extends Controller
{
    public function musica()
    {   
        $lista = Playlist::all();
        return view('mytrainningpath.mimusica', ['play'=>$lista]);
    }

    public function store(Request $Request){

        $playlist = new Playlist;
        $cont = 0;
        $ultimo = '';
        $tipo = '';
        $to_parse = $Request->playlist;
        $array = explode ( '/', $to_parse);
        foreach ( $array as $palabra ) {
            $cont +=1;
            if ($cont == 4){
                $tipo = $palabra;
            }
            $ultimo = $palabra;
        }

        $playlist->playlist=$ultimo;
        $playlist->tipo=$tipo;
        $playlist->user_id= Auth()->user()->id;

        $playlist->save();

        return redirect()->route('mytrainningpath/mimusica');


    }
}
