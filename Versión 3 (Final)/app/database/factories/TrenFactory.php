<?php

namespace Database\Factories;

use App\Models\Tren;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TrenFactory extends Factory
{
    protected $model = Tren::class;

    public function definition()
    {
        return [
			'Ejercicios_id' => $this->faker->name,
			'SobrecargaS_id' => $this->faker->name,
			'SobrecargaR_id' => $this->faker->name,
        ];
    }
}
