<?php

namespace Database\Factories;

use App\Models\Guia;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GuiaFactory extends Factory
{
    protected $model = Guia::class;

    public function definition()
    {
        return [
			'Titulo' => $this->faker->name,
			'Descripcion' => $this->faker->name,
        ];
    }
}
