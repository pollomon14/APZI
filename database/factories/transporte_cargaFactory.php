<?php

namespace Database\Factories;

use App\Models\transporte_carga;
use Illuminate\Database\Eloquent\Factories\Factory;

class transporte_cargaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = transporte_carga::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'placa' => $this->faker->word,
        'id_icono' => $this->faker->randomDigitNotNull,
        'nombre' => $this->faker->word,
        'carroceria' => $this->faker->word,
        'capacidad' => $this->faker->word,
        'telefono' => $this->faker->randomDigitNotNull,
        'whatsapp' => $this->faker->word,
        'id_horario' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
