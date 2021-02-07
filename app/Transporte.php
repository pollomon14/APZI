<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Transporte extends Model
{
use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Id','tipo','clase','Placa','Conductor','cedula','Empresa','Telefono','Whatsapp','Ciudad','Capacidad','Activo','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday','Habilitado',
    ];

}