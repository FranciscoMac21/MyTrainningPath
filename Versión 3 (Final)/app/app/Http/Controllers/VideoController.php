<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Trenin;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Full;
use App\Models\Tren;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$trens = Tren::all();

        $videos = Full::all();


        //['datosRutina'=>$datoRutinas],

        return view('admin.video', ['video'=>$videos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $Request)
    {
        $insertarSMP = new Video;

        if($Request->hasfile(key: 'video')){
            $nombreVID=$_FILES['video']['name'];//obtiene el nombre
            $ruta="videos";
            $ruta=$ruta."/".$nombreVID;
            $insertarSMP->Direccion=$ruta;
            $insertarSMP->Ejercicio=$Request->ejercicio;

            //$insertarSMP->rutina=Storage::putFile('video', $request->file('rutinas/SemanaPrueba'));


            $size = $_FILES['video']['size'];
            
            $nombreVID=$_FILES['video']['name'];//obtiene el nombre
            $archivo=$_FILES['video']['tmp_name'];//contiene el archivo
            $ruta="videos";
            $ruta=$ruta."/".$nombreVID;

            move_uploaded_file($archivo,$ruta);//mueve la imagen a la carpeta
        }

        $insertarSMP->save();
        return redirect()->route('admin/video');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    public function update(Request $request){
        $id = $request->ejercicio;

        $video = Full::findOrFail($id);

        if($request->hasfile(key: 'video')){
            $nombreVID=$_FILES['video']['name'];//obtiene el nombre
            $ruta="videos";
            $ruta=$ruta."/".$nombreVID;
            $video->Direccion=$ruta;

            $size = $_FILES['video']['size'];
            
            $nombreVID=$_FILES['video']['name'];//obtiene el nombre
            $archivo=$_FILES['video']['tmp_name'];//contiene el archivo
            $ruta="videos";
            $ruta=$ruta."/".$nombreVID;

            move_uploaded_file($archivo,$ruta);//mueve la imagen a la carpeta
        }
        $video->save();

        return redirect()->route('admin/video');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
