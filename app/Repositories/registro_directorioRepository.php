<?php

namespace App\Repositories;

use App\Models\registro_directorio;
use App\Repositories\BaseRepository;

/**
 * Class registro_directorioRepository
 * @package App\Repositories
 * @version May 21, 2021, 2:56 am UTC
*/

class registro_directorioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_local',
        'nombre_local',
        'telefono_contador',
        'whatsapp_contador',
        'catalogo_contador'
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
        return registro_directorio::class;
    }
}
