<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class transporte_carga
 * @package App\Models
 * @version April 9, 2021, 2:19 am UTC
 *
 * @property string $placa
 * @property integer $id_icono
 * @property string $nombre
 * @property string $carroceria
 * @property string $capacidad
 * @property integer $telefono
 * @property string $whatsapp
 * @property integer $id_horario
 */
class transporte_carga extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'transporte_cargas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'placa',
        'id_icono',
        'nombre',
        'carroceria',
        'capacidad',
        'telefono',
        'whatsapp',
        'id_horario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'placa' => 'string',
        'id_icono' => 'integer',
        'nombre' => 'string',
        'carroceria' => 'string',
        'capacidad' => 'string',
        'telefono' => 'integer',
        'whatsapp' => 'string',
        'id_horario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'placa' => 'required',
        'id_icono' => 'required',
        'carroceria' => 'required',
        'capacidad' => 'required',
        'telefono' => 'required',
        'id_horario' => 'required'
    ];

    
}
