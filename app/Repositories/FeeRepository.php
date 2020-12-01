<?php

namespace App\Repositories;

use App\Models\Fee;
use App\Repositories\BaseRepository;

/**
 * Class FeeRepository
 * @package App\Repositories
 * @version November 1, 2020, 6:54 am UTC
*/

class FeeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fee_structure_id',
        'payment',
        'due'
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
        return Fee::class;
    }
}
