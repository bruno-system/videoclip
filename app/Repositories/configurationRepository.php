<?php

namespace App\Repositories;

use App\Models\configuration;
use App\Repositories\BaseRepository;

/**
 * Class configurationRepository
 * @package App\Repositories
 * @version August 18, 2019, 10:52 pm UTC
*/

class configurationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'direccion',
        'email',
        'phone',
        'horarios',
        'facebook',
        'instagram',
        'social',
        'mensaje',
        'popup',
        'paginateA',
        'paginateB',
        'style'
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
        return configuration::class;
    }
}
