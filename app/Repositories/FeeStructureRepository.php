<?php

namespace App\Repositories;

use App\Models\FeeStructure;
use App\Repositories\BaseRepository;

/**
 * Class FeeStructureRepository
 * @package App\Repositories
 * @version November 1, 2020, 6:53 am UTC
*/

class FeeStructureRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'semester_id',
        'course_id',
        'level_id',
        'admissionsFee',
        'semesterFee'
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
        return FeeStructure::class;
    }
}
