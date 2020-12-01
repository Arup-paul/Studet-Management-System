<?php

namespace App\Repositories;

use App\Models\Attendence;
use App\Repositories\BaseRepository;

/**
 * Class AttendenceRepository
 * @package App\Repositories
 * @version September 9, 2020, 6:13 am UTC
*/

class AttendenceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_id',
        'class_id',
        'subject_id',
        'teacher_id',
        'attendace_status'
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
        return Attendence::class;
    }
}
