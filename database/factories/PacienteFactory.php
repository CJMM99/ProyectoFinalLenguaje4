<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->firstName()." ".fake()->lastName,
            'edad' =>fake()->numberBetween(15, 60),
            'genero'=>rand(0, 1) ? 'femenino' : 'masculino',
        ];
    }
}
