<?php

namespace App\Repositories;

use App\Models\palabra_mas_buscada;
use App\Repositories\BaseRepository;

/**
 * Class palabra_mas_buscadaRepository
 * @package App\Repositories
 * @version May 20, 2021, 3:58 am UTC
*/

class palabra_mas_buscadaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'palabra',
        'contador'
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
        return palabra_mas_buscada::class;
    }
}
