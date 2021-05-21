<?php

namespace Database\Factories;

use App\Models\registro_directorio;
use Illuminate\Database\Eloquent\Factories\Factory;

class registro_directorioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = registro_directorio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_local' => $this->faker->randomDigitNotNull,
        'nombre_local' => $this->faker->word,
        'telefono_contador' => $this->faker->randomDigitNotNull,
        'whatsapp_contador' => $this->faker->randomDigitNotNull,
        'catalogo_contador' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
