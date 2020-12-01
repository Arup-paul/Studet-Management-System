<?php

namespace App\Models;

use App\Models\Admission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roll extends Model
{
   use SoftDeletes;

   public $guarded = [];



   public static function onlineStudent(){
       $students = Roll::join('admissions','admissions.id', '=','rolls.student_id')
         ->where(['username' => Session::get('studentSession')])->first();

         return $students;

   }


   public function student(){
       return $this->belongsTo(Admission::class,'student_id');
   }

}
