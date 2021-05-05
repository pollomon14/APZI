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
 * @property integer $habilitado
 */
class iconos extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'iconos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'link',
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
        'link' => 'string',
        'habilitado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'link' => 'required',
        'habilitado' => 'required'
    ];

    public function emergencias(){
        return $this->hasMany('App\Models\emergencias');
    }


}
