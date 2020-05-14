<?php

namespace App\Repositories;

use App\Models\RefLevel;
use App\Repositories\BaseRepository;

/**
 * Class RefLevelRepository
 * @package App\Repositories
 * @version May 14, 2020, 9:53 pm UTC
*/

class RefLevelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'reward',
        'congratulatory_message',
        'target_no_referrals',
        'points_per_referral'
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
        return RefLevel::class;
    }
}
