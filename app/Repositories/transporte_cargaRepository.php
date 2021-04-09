<?php

namespace App\Repositories;

use App\Models\transporte_carga;
use App\Repositories\BaseRepository;

/**
 * Class transporte_cargaRepository
 * @package App\Repositories
 * @version April 9, 2021, 2:19 am UTC
*/

class transporte_cargaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'placa',
        'id_icono',
        'nombre',
        'carroceria',
        'capacidad',
        'telefono',
        'whatsapp',
        'id_horario'
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
        return transporte_carga::class;
    }
}
