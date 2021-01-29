<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Destacados extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nombre','Descripcion','Direccion','Ubicacion','Horario','Contador','Whatsapp','Facebook','Instagram','Linkedin','Pagina','Correo','Telefono','Brochure','Imagen1','Imagen2','Imagen4','Imagen3','Imagen4','Imagen5','Imagen6','Imagen7','Imagen8','Imagen9','Imagen10','HTML','Domicilios','Categoria','Fecha_creacion','Logo','Habilitado','Numero_Contador','Palabras_Clave','Banner','Ciudad','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday','Timestamp',
 
    ];
}
