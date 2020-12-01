<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class Teacher_export implements FromCollection,  WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $teacher = DB::table('teachers')->select(['first_name','last_name','gender','email','dob','phone','address','nationality','passport','status','dateregistared','user_id'] )->get();
        return $teacher;
    }

    public function headings() : array
    {
       return [
          'First Name',
          'Last Name',
          'Gender',
          'Email',
          'Dob',
          'Phone',
          'Address',
          'Nationality',
          'Passport',
          'Status',
          'dateregistared',
          'user_id',
       ];
    }
}
