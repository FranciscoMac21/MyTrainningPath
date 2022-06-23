<?php

namespace Database\Factories;

use App\Models\Full;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FullFactory extends Factory
{
    protected $model = Full::class;

    public function definition()
    {
        return [
			'Ejercicios_id' => $this->faker->name,
			'SobrecargaS_id' => $this->faker->name,
			'SobrecargaR_id' => $this->faker->name,
        ];
    }
}
