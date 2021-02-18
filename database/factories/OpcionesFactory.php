<?php

namespace Database\Factories;

use App\Models\Opciones;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpcionesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Opciones::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'texto' => $this->faker->name,
            'correcto'=> true,
        ];
    }
}
