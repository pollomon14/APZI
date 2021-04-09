<?php

namespace App\Repositories;

use App\Models\eventos;
use App\Repositories\BaseRepository;

/**
 * Class eventosRepository
 * @package App\Repositories
 * @version April 9, 2021, 1:49 am UTC
*/

class eventosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'imagen',
        'titulo',
        'descripcion',
        'link',
        'id_icono',
        'texto_boton',
        'id_municipio',
        'habilitado',
        'fecha_inicio',
        'fecha_fin',
        'tipo',
        'id_destacado'
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
        return eventos::class;
    }
}
