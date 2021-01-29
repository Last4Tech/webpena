<?php

namespace App\Http\Controllers;

use App\Leader;
use Illuminate\Http\Request;
use PagesTableSeeder;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Galery;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;
use App\Models\comment;
use TCG\Voyager\Models\Struktur;

class PageController extends Controller
{
    public function home (){
        $post = Post::latest()->get()->random(5);
        $id = Post::where('id', '=', $post)->value('id');
        $category = Category::all();
        $kd = Galery::distinct()->get(['category_id']);
        $image = Galery::latest()->get()->random(9);
        $jml = comment::where('post_id', $id)->count('comment');
        return view('frontend.index', compact('post', 'category', 'image', 'kd', 'jml'));
    }
    public function index (){
        $page = Page::all();
        return view('frontend.page.index', compact('page'));
    }
    public function show ($slug){
        $page = Page::where('slug', '=', $slug)->firstOrFail();
        $all = Page::all();
        $id = Page::where('slug', $slug)->value('id');
        $komen = comment::all();
        $jml = comment::where('page_id', $id)->count('comment');
        return view('frontend.page.page', compact('page', 'all', 'id', 'komen', 'jml'));
    }
    public function insertcoment(Request $request, $id)
    {
        $request->validate([
            'name' =>'required',
            'email' => 'required',
            'comment' => 'required',
        ]);
        $page = Page::find($id);
        $slug = Page::where('id', $id)->value('slug');
        $user = new comment();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->website = $request->website;
        $user->comment = $request->comment;
        $user->page_id = $id;
        $user->save();

        return redirect()->action([PageController::class, 'show'], ['slug'=>$slug]);
    }
    public function Struktur($slug){
        $code = Struktur::where('slug', '=', $slug)->firstOrFail();
        return view('frontend.struktur', compact('code'));
    }
    public function leader(){
        $leader = Leader::all();
        return view('frontend.leader', compact('leader'));
    }
}
