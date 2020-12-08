<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'nacimiento' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'telefono' => $this->faker->numberBetween($min = 150000, $max = 900000),
            'escuela' => $this->faker->company(),
            'dni' => $this->faker->numberBetween($min = 100000, $max = 500000),
            'afiliado' => $this->faker->numberBetween($min = 500, $max = 18000),
            'diagnostico' => $this->faker->sentence()
        ];
    }
}
