<?php

namespace Database\Factories;

use App\Models\directorio;
use Illuminate\Database\Eloquent\Factories\Factory;

class directorioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = directorio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->text,
        'id_categoria' => $this->faker->randomDigitNotNull,
        'id_subcategoria' => $this->faker->randomDigitNotNull,
        'direccion' => $this->faker->text,
        'responsable' => $this->faker->text,
        'domicilio' => $this->faker->randomDigitNotNull,
        'descripcion' => $this->faker->text,
        'ubicacion' => $this->faker->text,
        'id_horario' => $this->faker->randomDigitNotNull,
        'tipo_de_plan' => $this->faker->randomDigitNotNull,
        'telefono' => $this->faker->text,
        'whatsapp' => $this->faker->text,
        'facebook' => $this->faker->text,
        'instagram' => $this->faker->text,
        'linkedin' => $this->faker->text,
        'pagina' => $this->faker->text,
        'correo' => $this->faker->text,
        'catalogo' => $this->faker->text,
        'video' => $this->faker->text,
        'imagen1' => $this->faker->text,
        'imagen2' => $this->faker->text,
        'imagen3' => $this->faker->text,
        'imagen4' => $this->faker->text,
        'imagen5' => $this->faker->text,
        'imagen6' => $this->faker->text,
        'imagen7' => $this->faker->text,
        'imagen8' => $this->faker->text,
        'imagen9' => $this->faker->text,
        'imagen10' => $this->faker->text,
        'id_evento' => $this->faker->text,
        'logo' => $this->faker->text,
        'habilitado' => $this->faker->randomDigitNotNull,
        'visitas' => $this->faker->randomDigitNotNull,
        'cant_visitas' => $this->faker->randomDigitNotNull,
        'palabras_clave' => $this->faker->text,
        'id_municipio' => $this->faker->text,
        'fecha_inicio' => $this->faker->word,
        'fecha_fin' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
