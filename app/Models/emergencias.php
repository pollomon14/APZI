<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class emergencias
 * @package App\Models
 * @version April 8, 2021, 4:51 am UTC
 *
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property integer $id_icono
 * @property integer $id_municipio
 * @property string $maps
 * @property integer $tipo_servicio
 * @property string $desplegable
 * @property string $id_evento
 * @property integer $habilitado
 */
class emergencias extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'emergencias';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'id_icono',
        'id_municipio',
        'maps',
        'tipo_servicio',
        'desplegable',
        'id_evento',
        'habilitado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'direccion' => 'string',
        'telefono' => 'string',
        'id_icono' => 'integer',
        'id_municipio' => 'integer',
        'maps' => 'string',
        'tipo_servicio' => 'integer',
        'desplegable' => 'string',
        'id_evento' => 'string',
        'habilitado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'id_icono' => 'required',
        'id_municipio' => 'required',
        'tipo_servicio' => 'required',
        'habilitado' => 'required'
    ];



    public function iconos(){
        return $this->belongsTo('App\Models\iconos','id_icono');
    }

    public function municipios(){
        return $this->belongsTo('App\Models\municipios','id_municipio');
    }

    public function eventos(){
        return $this->belongsTo('App\Models\eventos','id_evento');
    }


}
