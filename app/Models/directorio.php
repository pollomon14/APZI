<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class directorio
 * @package App\Models
 * @version April 14, 2021, 2:31 am UTC
 *
 * @property string $nombre
 * @property integer $id_categoria
 * @property integer $id_subcategoria
 * @property string $direccion
 * @property string $responsable
 * @property integer $domicilio
 * @property string $descripcion
 * @property string $ubicacion
 * @property integer $id_horario
 * @property integer $tipo_de_plan
 * @property string $telefono
 * @property string $whatsapp
 * @property string $facebook
 * @property string $instagram
 * @property string $linkedin
 * @property string $pagina
 * @property string $correo
 * @property string $catalogo
 * @property string $video
 * @property string $imagen1
 * @property string $imagen2
 * @property string $imagen3
 * @property string $imagen4
 * @property string $imagen5
 * @property string $imagen6
 * @property string $imagen7
 * @property string $imagen8
 * @property string $imagen9
 * @property string $imagen10
 * @property string $id_evento
 * @property string $logo
 * @property integer $habilitado
 * @property integer $visitas
 * @property integer $cant_visitas
 * @property string $palabras_clave
 * @property string $id_municipio
 * @property string $fecha_inicio
 * @property string $fecha_fin
 */
class directorio extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'directorios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'id_categoria',
        'id_subcategoria',
        'direccion',
        'responsable',
        'domicilio',
        'descripcion',
        'ubicacion',
        'id_horario',
        'tipo_de_plan',
        'telefono',
        'whatsapp',
        'facebook',
        'instagram',
        'linkedin',
        'pagina',
        'correo',
        'catalogo',
        'video',
        'imagen1',
        'imagen2',
        'imagen3',
        'imagen4',
        'imagen5',
        'imagen6',
        'imagen7',
        'imagen8',
        'imagen9',
        'imagen10',
        'id_evento',
        'logo',
        'habilitado',
        'visitas',
        'cant_visitas',
        'palabras_clave',
        'id_municipio',
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
        'nombre' => 'string',
        'id_categoria' => 'integer',
        'id_subcategoria' => 'integer',
        'direccion' => 'string',
        'responsable' => 'string',
        'domicilio' => 'integer',
        'descripcion' => 'string',
        'ubicacion' => 'string',
        'id_horario' => 'integer',
        'tipo_de_plan' => 'integer',
        'telefono' => 'string',
        'whatsapp' => 'string',
        'facebook' => 'string',
        'instagram' => 'string',
        'linkedin' => 'string',
        'pagina' => 'string',
        'correo' => 'string',
        'catalogo' => 'string',
        'video' => 'string',
        'imagen1' => 'string',
        'imagen2' => 'string',
        'imagen3' => 'string',
        'imagen4' => 'string',
        'imagen5' => 'string',
        'imagen6' => 'string',
        'imagen7' => 'string',
        'imagen8' => 'string',
        'imagen9' => 'string',
        'imagen10' => 'string',
        'id_evento' => 'string',
        'logo' => 'string',
        'habilitado' => 'integer',
        'visitas' => 'integer',
        'cant_visitas' => 'integer',
        'palabras_clave' => 'string',
        'id_municipio' => 'string',
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'id_categoria' => 'required',
        'id_subcategoria' => 'required',
        'domicilio' => 'required',
        'tipo_de_plan' => 'required',
        'habilitado' => 'required',
        'visitas' => 'required',
        'cant_visitas' => 'required',
        'id_municipio' => 'required',
        'fecha_inicio' => 'required'
    ];

    
}
