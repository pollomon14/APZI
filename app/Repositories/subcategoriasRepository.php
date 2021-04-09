<?php

namespace App\Repositories;

use App\Models\subcategorias;
use App\Repositories\BaseRepository;

/**
 * Class subcategoriasRepository
 * @package App\Repositories
 * @version April 8, 2021, 3:56 am UTC
*/

class subcategoriasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
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
        return subcategorias::class;
    }
}
