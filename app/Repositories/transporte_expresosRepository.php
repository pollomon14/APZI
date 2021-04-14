<?php

namespace App\Repositories;

use App\Models\transporte_expresos;
use App\Repositories\BaseRepository;

/**
 * Class transporte_expresosRepository
 * @package App\Repositories
 * @version April 14, 2021, 2:40 am UTC
*/

class transporte_expresosRepository extends BaseRepository
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
        return transporte_expresos::class;
    }
}
