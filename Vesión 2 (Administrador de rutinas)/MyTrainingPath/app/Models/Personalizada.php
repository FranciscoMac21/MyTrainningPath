<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personalizada extends Model
{
    use HasFactory;

    //relación
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
