<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class horarios
 * @package App\Models
 * @version April 9, 2021, 2:01 am UTC
 *
 * @property string $nombre
 * @property string $horario
 * @property string $observacion
 * @property integer $habilitado
 */
class horarios extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'horarios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'horario',
        'observacion',
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
        'horario' => 'string',
        'observacion' => 'string',
        'habilitado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'horario' => 'required',
        'habilitado' => 'required'
    ];

    
}
