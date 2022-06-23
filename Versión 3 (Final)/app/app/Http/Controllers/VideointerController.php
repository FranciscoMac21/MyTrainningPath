<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Tren;

class VideointerController extends Controller
{
    public function index()
    {
        $videos = Tren::all();

        //$videos = Full::all();


        //['datosRutina'=>$datoRutinas],

        return view('admin.videosInter', ['video'=>$videos]);
    }

    public function update(Request $request){
        $id = $request->ejercicio;

        $video = Tren::findOrFail($id);

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

        return redirect()->route('admin/videointer');
    }
}
