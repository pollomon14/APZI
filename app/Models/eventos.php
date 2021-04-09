<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class eventos
 * @package App\Models
 * @version April 9, 2021, 1:49 am UTC
 *
 * @property string $imagen
 * @property string $titulo
 * @property string $descripcion
 * @property string $link
 * @property string $id_icono
 * @property string $texto_boton
 * @property integer $id_municipio
 * @property integer $habilitado
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $tipo
 * @property integer $id_destacado
 */
class eventos extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'eventos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'imagen',
        'titulo',
        'descripcion',
        'link',
        'id_icono',
        'texto_boton',
        'id_municipio',
        'habilitado',
        'fecha_inicio',
        'fecha_fin',
        'tipo',
        'id_destacado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'imagen' => 'string',
        'titulo' => 'string',
        'descripcion' => 'string',
        'link' => 'string',
        'id_icono' => 'integer',
        'texto_boton' => 'string',
        'id_municipio' => 'integer',
        'habilitado' => 'integer',
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date',
        'tipo' => 'string',
        'id_destacado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'imagen' => 'required',
        'habilitado' => 'required',
        'fecha_inicio' => 'required',
        'fecha_fin' => 'required'
    ];

    
}
