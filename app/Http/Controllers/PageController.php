<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post as ModelsPost;

class PageController extends Controller
{
    public function home (){
        $post = ModelsPost::all();
        return view('frontend.index',['post'=>$post]);
    }
     
}
