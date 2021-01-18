<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PagesTableSeeder;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Galery;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;

class PageController extends Controller
{
    public function home (){
        $post = Post::latest()->get()->random(5);
        $category = Category::all();
        $kd = Galery::distinct()->get(['category_id']);
        $image = Galery::all();
        return view('frontend.index', compact('post', 'category', 'image', 'kd'));
    }
    public function index (){
        $page = Page::all();
        return view('frontend.page.index', compact('page'));
    }
    public function show ($slug){
        $page = Page::where('slug', '=', $slug)->firstOrFail();
        $all = Page::all();
        return view('frontend.page.page', compact('page', 'all'));
    }
}
