<?php

namespace Database\Factories;

use App\Models\Nivel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NivelFactory extends Factory
{
    protected $model = Nivel::class;

    public function definition()
    {
        return [
			'nivel' => $this->faker->name,
        ];
    }
}
