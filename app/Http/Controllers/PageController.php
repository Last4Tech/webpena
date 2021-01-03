<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home (){
        return view('frontend.index');
    }
    public function blog (){
        return view('frontend.blog');
    } 
    public function page(){
        return view('frontend.page');
    }
}
