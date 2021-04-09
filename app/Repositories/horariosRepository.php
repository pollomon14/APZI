<?php

namespace App\Repositories;

use App\Models\horarios;
use App\Repositories\BaseRepository;

/**
 * Class horariosRepository
 * @package App\Repositories
 * @version April 9, 2021, 2:01 am UTC
*/

class horariosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'horario',
        'observacion',
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
        return horarios::class;
    }
}
