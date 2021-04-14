<?php

namespace App\Repositories;

use App\Models\transporte_taxis;
use App\Repositories\BaseRepository;

/**
 * Class transporte_taxisRepository
 * @package App\Repositories
 * @version April 14, 2021, 2:44 am UTC
*/

class transporte_taxisRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'placa',
        'id_icono',
        'nombre',
        'desplegable',
        'telefono',
        'whatsapp',
        'id_evento',
        'id_horario',
        'id_municipio',
        'habilitado',
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
        return transporte_taxis::class;
    }
}
