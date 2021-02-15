<?php

namespace Database\Factories;

use App\Models\ModalidadPermiso;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModalidadPermisoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ModalidadPermiso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description'=> 'aprenderas a conducir con ayuda',
            'img'=> $this->faker->imageUrl,
            'code'=>1
        ];
    }
}
