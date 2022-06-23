<?php

namespace Database\Factories;

use App\Models\Ejercicio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EjercicioFactory extends Factory
{
    protected $model = Ejercicio::class;

    public function definition()
    {
        return [
			'Ejercicio' => $this->faker->name,
        ];
    }
}
