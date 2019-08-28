<?php

namespace App\Repositories;

use App\Models\movie;
use App\Repositories\BaseRepository;

/**
 * Class movieRepository
 * @package App\Repositories
 * @version August 28, 2019, 1:29 am -03
*/

class movieRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'img',
        'video',
        'description',
        'show',
        'id_category'
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
        return movie::class;
    }
}
