<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LevelToCourseController extends Controller
{
     public function DynamicLevel(Request $request){
        if($request->ajax()){
            $data = $request->all();
            return $data;
        }
    }
}
