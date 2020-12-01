<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FeeStructure
 * @package App\Models
 * @version November 1, 2020, 6:53 am UTC
 *
 * @property string $semester_id
 * @property string $course_id
 * @property string $level_id
 * @property string $admissionsFee
 * @property string $semesterFee
 */
class FeeStructure extends Model
{
    use SoftDeletes;

    public $table = 'fee_structures';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'semester_id',
        'course_id',
        'level_id',
        'admissionsFee',
        'semesterFee'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'semester_id' => 'string',
        'course_id' => 'string',
        'level_id' => 'string',
        'admissionsFee' => 'string',
        'semesterFee' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'semester_id' => 'required|string|max:255',
        'course_id' => 'required|string|max:255',
        'level_id' => 'required|string|max:255',
        'admissionsFee' => 'required|string|max:255',
        'semesterFee' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
