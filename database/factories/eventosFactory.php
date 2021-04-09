<?php

namespace Database\Factories;

use App\Models\eventos;
use Illuminate\Database\Eloquent\Factories\Factory;

class eventosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = eventos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imagen' => $this->faker->word,
        'titulo' => $this->faker->word,
        'descripcion' => $this->faker->word,
        'link' => $this->faker->word,
        'id_icono' => $this->faker->word,
        'texto_boton' => $this->faker->word,
        'id_municipio' => $this->faker->randomDigitNotNull,
        'habilitado' => $this->faker->randomDigitNotNull,
        'fecha_inicio' => $this->faker->word,
        'fecha_fin' => $this->faker->word,
        'tipo' => $this->faker->word,
        'id_destacado' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
