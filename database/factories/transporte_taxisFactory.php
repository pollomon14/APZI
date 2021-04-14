<?php

namespace Database\Factories;

use App\Models\transporte_taxis;
use Illuminate\Database\Eloquent\Factories\Factory;

class transporte_taxisFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = transporte_taxis::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'placa' => $this->faker->text,
        'id_icono' => $this->faker->randomDigitNotNull,
        'nombre' => $this->faker->text,
        'desplegable' => $this->faker->text,
        'telefono' => $this->faker->text,
        'whatsapp' => $this->faker->text,
        'id_evento' => $this->faker->text,
        'id_horario' => $this->faker->randomDigitNotNull,
        'id_municipio' => $this->faker->text,
        'habilitado' => $this->faker->randomDigitNotNull,
        'fecha_inicio' => $this->faker->word,
        'fecha_fin' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
