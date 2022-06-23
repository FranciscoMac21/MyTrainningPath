<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trenin extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'trenins';

    protected $fillable = ['Ejercicios_id','SobrecargaS_id','SobrecargaR_id','Direccion'];
	
}
