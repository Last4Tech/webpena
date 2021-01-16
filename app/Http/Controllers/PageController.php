<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PagesTableSeeder;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class PageController extends Controller
{
    public function home (){
        $post = Post::latest()->get()->random(5);
        return view('frontend.index',['post'=>$post]);
    }
}
