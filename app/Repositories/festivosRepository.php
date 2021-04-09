<?php

namespace App\Repositories;

use App\Models\festivos;
use App\Repositories\BaseRepository;

/**
 * Class festivosRepository
 * @package App\Repositories
 * @version April 9, 2021, 1:56 am UTC
*/

class festivosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'fecha',
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
        return festivos::class;
    }
}
