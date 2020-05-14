<?php

namespace App\Repositories;

use App\Models\RefCategories;
use App\Repositories\BaseRepository;

/**
 * Class RefCategoriesRepository
 * @package App\Repositories
 * @version May 14, 2020, 9:53 pm UTC
*/

class RefCategoriesRepository extends BaseRepository
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
        return RefCategories::class;
    }
}
