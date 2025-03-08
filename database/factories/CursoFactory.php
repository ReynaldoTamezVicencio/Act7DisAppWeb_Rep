<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Curso;
use App\Models\Kit;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    protected $model = Curso::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence,
            'caratula' => $this->faker->imageUrl(640, 480, 'education', true),
            'contenido' => $this->faker->paragraph,
            'kit_id' => Kit::inRandomOrder()->first()->id,
        ];
    }
}
