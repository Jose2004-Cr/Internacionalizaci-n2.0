<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actividad>
 */
class ActividadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Actividad_Name' => $this->faker->unique->randomElement((['Ruta', 'Ponencia', 'Espejo', 'Catedra abierta', 'Congreso']))
        ];
    }
}
