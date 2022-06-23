<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'nivels';

    protected $fillable = ['nivel'];
	
}
