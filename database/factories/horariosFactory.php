<?php

namespace Database\Factories;

use App\Models\horarios;
use Illuminate\Database\Eloquent\Factories\Factory;

class horariosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = horarios::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
        'horario' => $this->faker->word,
        'observacion' => $this->faker->word,
        'habilitado' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
