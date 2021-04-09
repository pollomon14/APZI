<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class festivos
 * @package App\Models
 * @version April 9, 2021, 1:56 am UTC
 *
 * @property string $nombre
 * @property string $fecha
 * @property integer $habilitado
 */
class festivos extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'festivos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'fecha',
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
        'fecha' => 'date',
        'habilitado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'fecha' => 'required',
        'habilitado' => 'required'
    ];

    
}
