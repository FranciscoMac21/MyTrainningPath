<?php

namespace Database\Factories;

use App\Models\Trenin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TreninFactory extends Factory
{
    protected $model = Trenin::class;

    public function definition()
    {
        return [
			'Ejercicios_id' => $this->faker->name,
			'SobrecargaS_id' => $this->faker->name,
			'SobrecargaR_id' => $this->faker->name,
        ];
    }
}
