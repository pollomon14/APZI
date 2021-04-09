<?php

namespace Database\Factories;

use App\Models\emergencias;
use Illuminate\Database\Eloquent\Factories\Factory;

class emergenciasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = emergencias::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
        'direccion' => $this->faker->word,
        'telefono' => $this->faker->word,
        'id_icono' => $this->faker->randomDigitNotNull,
        'id_municipio' => $this->faker->randomDigitNotNull,
        'maps' => $this->faker->word,
        'tipo_servicio' => $this->faker->randomDigitNotNull,
        'html' => $this->faker->word,
        'id_evento' => $this->faker->randomDigitNotNull,
        'habilitado' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
