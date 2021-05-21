<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class registro_directorio
 * @package App\Models
 * @version May 21, 2021, 2:56 am UTC
 *
 * @property integer $id_local
 * @property string $nombre_local
 * @property integer $telefono_contador
 * @property integer $whatsapp_contador
 * @property integer $catalogo_contador
 */
class registro_directorio extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'registro_directorios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_local',
        'nombre_local',
        'telefono_contador',
        'whatsapp_contador',
        'catalogo_contador'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_local' => 'integer',
        'nombre_local' => 'string',
        'telefono_contador' => 'integer',
        'whatsapp_contador' => 'integer',
        'catalogo_contador' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_local' => 'required',
        'nombre_local' => 'required',
        'telefono_contador' => 'required',
        'whatsapp_contador' => 'required',
        'catalogo_contador' => 'required'
    ];

    
}
