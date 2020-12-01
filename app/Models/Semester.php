<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Semester
 * @package App\Models
 * @version September 13, 2020, 6:07 am UTC
 *
 * @property string $semester_name
 * @property integer $semester_code
 * @property string $semester_duration
 * @property string $semester_description
 */
class Semester extends Model
{
    use SoftDeletes;

    public $table = 'semesters';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'semester_name',
        'semester_code',
        'semester_duration',
        'semester_description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'semester_name' => 'string',
        'semester_code' => 'integer',
        'semester_duration' => 'string',
        'semester_description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'semester_name' => 'required|string|max:255',
        'semester_code' => 'required|integer',
        'semester_duration' => 'required|string|max:255',
        'semester_description' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
