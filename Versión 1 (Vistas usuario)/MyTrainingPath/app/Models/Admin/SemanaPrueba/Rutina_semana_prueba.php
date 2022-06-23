<?php

namespace App\Models\Admin\SemanaPrueba;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rutina_semana_prueba extends Model
{
    use HasFactory;

    //relación
    public function categoria_semana_pruebas()
    {
        return $this->belongsTo(Categoria_semana_prueba::class);
    }

}
