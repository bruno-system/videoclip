<?php

namespace App\Repositories;

use App\Models\movie_category;
use App\Repositories\BaseRepository;

/**
 * Class movie_categoryRepository
 * @package App\Repositories
 * @version August 17, 2019, 7:46 pm UTC
*/

class movie_categoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return movie_category::class;
    }
}
