<?php

namespace App\Repositories;

use App\Models\directorio;
use App\Repositories\BaseRepository;

/**
 * Class directorioRepository
 * @package App\Repositories
 * @version April 14, 2021, 2:31 am UTC
*/

class directorioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'id_categoria',
        'id_subcategoria',
        'direccion',
        'responsable',
        'domicilio',
        'descripcion',
        'ubicacion',
        'id_horario',
        'tipo_de_plan',
        'telefono',
        'whatsapp',
        'facebook',
        'instagram',
        'linkedin',
        'pagina',
        'correo',
        'catalogo',
        'video',
        'imagen1',
        'imagen2',
        'imagen3',
        'imagen4',
        'imagen5',
        'imagen6',
        'imagen7',
        'imagen8',
        'imagen9',
        'imagen10',
        'id_evento',
        'logo',
        'habilitado',
        'visitas',
        'cant_visitas',
        'palabras_clave',
        'id_municipio',
        'fecha_inicio',
        'fecha_fin'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return directorio::class;
    }
}
