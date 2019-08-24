<?php

namespace App\Repositories;

use App\Models\img_slider;
use App\Repositories\BaseRepository;

/**
 * Class img_sliderRepository
 * @package App\Repositories
 * @version August 17, 2019, 9:42 am UTC
*/

class img_sliderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'img',
        'description',
        'show'
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
        return img_slider::class;
    }
}
