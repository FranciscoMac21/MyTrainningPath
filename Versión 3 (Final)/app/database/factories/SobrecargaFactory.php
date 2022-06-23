<?php

namespace Database\Factories;

use App\Models\Sobrecarga;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SobrecargaFactory extends Factory
{
    protected $model = Sobrecarga::class;

    public function definition()
    {
        return [
			'series' => $this->faker->name,
			'repeticiones' => $this->faker->name,
        ];
    }
}
