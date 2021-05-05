<?php

namespace App\Repositories;

use App\Models\categorias;
use App\Repositories\BaseRepository;

/**
 * Class categoriasRepository
 * @package App\Repositories
 * @version May 3, 2021, 11:30 pm UTC
*/

class categoriasRepository extends BaseRepository
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
        return categorias::class;
    }
}
