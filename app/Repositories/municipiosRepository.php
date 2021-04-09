<?php

namespace App\Repositories;

use App\Models\municipios;
use App\Repositories\BaseRepository;

/**
 * Class municipiosRepository
 * @package App\Repositories
 * @version April 9, 2021, 2:06 am UTC
*/

class municipiosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
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
        return municipios::class;
    }
}
