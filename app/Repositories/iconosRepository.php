<?php

namespace App\Repositories;

use App\Models\iconos;
use App\Repositories\BaseRepository;

/**
 * Class iconosRepository
 * @package App\Repositories
 * @version April 9, 2021, 1:29 am UTC
*/

class iconosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'link'
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
        return iconos::class;
    }
}
