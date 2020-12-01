<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ClassScheduling
 * @package App\Models
 * @version September 9, 2020, 6:18 am UTC
 *
 * @property integer $course_id
 * @property integer $class_id
 * @property integer $level_id
 * @property integer $shift_id
 * @property integer $classroom_id
 * @property integer $batch_id
 * @property integer $day_id
 * @property integer $time_id
 * @property integer $teacher_id
 * @property string $start_time
 * @property string $end_time
 * @property integer $semester
 * @property boolean $status
 */
class ClassScheduling extends Model
{
    use SoftDeletes;

    public $table = 'class_scheduling';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'course_id',
        'class_id',
        'level_id',
        'shift_id',
        'classroom_id',
        'batch_id',
        'day_id',
        'time_id',
        'semester_id',
        'teacher_id',
        'start_time',
        'end_time',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'course_id' => 'integer',
        'class_id' => 'integer',
        'level_id' => 'integer',
        'shift_id' => 'integer',
        'classroom_id' => 'integer',
        'semester_id' => 'integer',
        'batch_id' => 'integer',
        'day_id' => 'integer',
        'time_id' => 'integer',
        'teacher_id' => 'integer',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_id' => 'required|integer',
        'class_id' => 'required|integer',
        'level_id' => 'required',
        'shift_id' => 'required|integer',
        'classroom_id' => 'required|integer',
        'semester_id' => 'required',
        'batch_id' => 'required|integer',
        'day_id' => 'required|integer',
        'time_id' => 'required|integer',
        'teacher_id' => 'required|integer',
        'start_time' => 'required',
        'end_time' => 'required',
        'status' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

      public function course() {
        return $this->belongsTo(\App\Models\Course::class, 'course_id');
      }
      public function class() {
        return $this->belongsTo(\App\Models\Classes::class, 'class_id');
      }
      public function level() {
        return $this->belongsTo(\App\Models\Level::class, 'level_id');
      }
      public function shift() {
        return $this->belongsTo(\App\Models\Shift::class, 'shift_id');
      }
      public function classroom() {
        return $this->belongsTo(\App\Models\Classroom::class, 'classroom_id');
      }
      public function batch() {
        return $this->belongsTo(\App\Models\Batch::class, 'batch_id');
      }
      public function semester() {
        return $this->belongsTo(\App\Models\Semester::class, 'semester_id');
      }
      public function day() {
        return $this->belongsTo(\App\Models\Day::class, 'day_id');
      }
      public function time() {
        return $this->belongsTo(\App\Models\Time::class, 'time_id');
      }
      public function teacher() {
        return $this->belongsTo(\App\Models\Teacher::class, 'teacher_id');
      }

      


}
