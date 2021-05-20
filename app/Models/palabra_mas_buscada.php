<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class palabra_mas_buscada
 * @package App\Models
 * @version May 20, 2021, 3:58 am UTC
 *
 * @property string $palabra
 * @property integer $contador
 */
class palabra_mas_buscada extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'palabra_mas_buscadas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'palabra',
        'contador'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'palabra' => 'string',
        'contador' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'palabra' => 'required',
        'contador' => 'required'
    ];

    
}
