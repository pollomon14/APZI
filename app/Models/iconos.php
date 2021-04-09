<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class iconos
 * @package App\Models
 * @version April 9, 2021, 1:29 am UTC
 *
 * @property string $nombre
 * @property string $link
 */
class iconos extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'iconos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'link'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'link' => 'required'
    ];

    
}
