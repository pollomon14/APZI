<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class municipios
 * @package App\Models
 * @version April 9, 2021, 2:06 am UTC
 *
 * @property string $nombre
 * @property integer $habilitado
 */
class municipios extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'municipios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
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
        'habilitado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'habilitado' => 'required'
    ];

    
}
