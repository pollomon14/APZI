<?php

namespace App\Repositories;

use App\Models\emergencias;
use App\Repositories\BaseRepository;

/**
 * Class emergenciasRepository
 * @package App\Repositories
 * @version April 8, 2021, 4:51 am UTC
*/

class emergenciasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'direccion',
        'telefono',
        'id_icono',
        'id_municipio',
        'maps',
        'tipo_servicio',
        'html',
        'id_evento',
        'habilitado'
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
        return emergencias::class;
    }
}
