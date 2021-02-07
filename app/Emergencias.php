<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Emergencias extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Id','Nombre','Direccion','Telefono','Logo','Ciudad','Maps','Tipo','Habilitado',
    ];
}