<?php

namespace App\Models\Admin\SemanaPrueba;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria_semana_prueba extends Model
{
    use HasFactory;

    //relación
    public function rutina_semana_pruebas()
    {
        return $this->hasMany(Rutina_semana_prueba::class);
    }
}
