<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tren extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'trens';

    protected $fillable = ['Ejercicios_id','SobrecargaS_id','SobrecargaR_id', 'Direccion'];

    //relación
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
	
}
