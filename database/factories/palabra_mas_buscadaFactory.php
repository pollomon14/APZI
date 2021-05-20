<?php

namespace Database\Factories;

use App\Models\palabra_mas_buscada;
use Illuminate\Database\Eloquent\Factories\Factory;

class palabra_mas_buscadaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = palabra_mas_buscada::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'palabra' => $this->faker->word,
        'contador' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
