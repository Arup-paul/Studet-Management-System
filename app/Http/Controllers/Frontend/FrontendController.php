<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('Frontend.index');
    }
    public function course(){
        return view('Frontend.course');
    }
    public function contact(){
        return view('Frontend.contact');
    }
    public function blog(){
        return view('Frontend.blog');
    }
    public function gallery(){
        return view('Frontend.gallery');
    }
}
