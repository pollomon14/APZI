<?php

namespace App\Repositories;

use App\Models\transporte_domiciliarios;
use App\Repositories\BaseRepository;

/**
 * Class transporte_domiciliariosRepository
 * @package App\Repositories
 * @version April 14, 2021, 2:35 am UTC
*/

class transporte_domiciliariosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo_vehiculo',
        'placa',
        'id_icono',
        'nombre',
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
        return transporte_domiciliarios::class;
    }
}
