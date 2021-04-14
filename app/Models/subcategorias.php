<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class subcategorias
 * @package App\Models
 * @version April 8, 2021, 3:56 am UTC
 *
 * @property string $nombre
 * @property integer $habilitado
 */
class subcategorias extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'subcategorias';
    

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
