<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class transporte_expresos
 * @package App\Models
 * @version April 14, 2021, 2:40 am UTC
 *
 * @property string $placa
 * @property integer $id_icono
 * @property string $nombre
 * @property string $carroceria
 * @property string $capacidad
 * @property string $telefono
 * @property string $whatsapp
 * @property string $id_evento
 * @property integer $id_horario
 * @property string $id_municipio
 * @property integer $habilitado
 * @property string $fecha_inicio
 * @property string $fecha_fin
 */
class transporte_expresos extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'transporte_expresos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'placa',
        'id_icono',
        'nombre',
        'carroceria',
        'capacidad',
        'telefono',
        'whatsapp',
        'id_evento',
        'id_horario',
        'id_municipio',
        'habilitado',
        'fecha_inicio',
        'fecha_fin'
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
        'telefono' => 'string',
        'whatsapp' => 'string',
        'id_evento' => 'string',
        'id_horario' => 'integer',
        'id_municipio' => 'string',
        'habilitado' => 'integer',
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'placa' => 'required',
        'telefono' => 'required',
        'id_horario' => 'required',
        'id_municipio' => 'required',
        'habilitado' => 'required',
        'fecha_inicio' => 'required'
    ];

    
}
