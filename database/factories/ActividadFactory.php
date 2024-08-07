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
            'nombre' => $this->faker->unique->randomElement((['Ruta',
            'Ponencia',
            'Espejo',
            'Catedra abierta',
            'Congreso',
            'COIL',
            'Convenio',
            'Reunion',
            'Actividad Deportiva',
            'Actividad MultiCultural',
            'Pasantia Investigativa',
            'Curso En Linea',
            'Actividad Bilingüe/Multikungüe',
            'Proyecto De Aula',
            'Intercambio Semestral']))
        ];
    }
}
