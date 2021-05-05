<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class categorias
 * @package App\Models
 * @version May 3, 2021, 11:30 pm UTC
 *
 * @property string $nombre
 * @property integer $habilitado
 */
class categorias extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'categorias';
    

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
