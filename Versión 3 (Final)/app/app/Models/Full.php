<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Full extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'fulls';

    protected $fillable = ['Ejercicios_id','SobrecargaS_id','SobrecargaR_id','Direccion'];
	
}
