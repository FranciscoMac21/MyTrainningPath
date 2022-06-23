<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guia extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'guias';

    protected $fillable = ['Titulo','Descripcion'];
	
}
