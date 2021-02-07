<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Directorio extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Id','Nombre','Direccion','Categoria','Subcategoria','Telefono','Contacto','Logo','Destacado','Habilitado','Domicilio','Ciudad','Fecha_de_Creacion',
 
    ];
}
