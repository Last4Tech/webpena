<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $post = Post::where([
            ['title', '!=', null],
            [function ($query) use ($request) {
                if (($term =$request->term)) {
                    $query->orWhere('title','LIKE', '%'. $term. '%')->get();
                }
            }]
        ])->orderBy("id","desc")->paginate(5);
        $blog = Post::latest()->get()->random(3);
        $all = Post::latest()->paginate(5);
        $category = Category::all();
        return view('frontend.post.blog', compact('post', 'category', 'blog'))->with('i', (request()->input('page', 1)- 1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($slug)
    {
        $id = Category::where('slug',$slug)->value('id', 'parent_id');
        $post = Post::where('category_id', $id)->orderBy("id","desc")->paginate(5);
        $blog = Post::latest()->get()->random(3);
        $all = Post::latest()->paginate(5);
        $category = Category::all();
        return view('frontend.post.blog', compact('post', 'category', 'blog'))->with('i', (request()->input('page', 1)- 1) *5);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $blog = Post::latest()->get()->random(3);
        $id = Post::where('slug', $slug)->value('id');
        $post = Post::where('slug', '=', $slug)->firstOrFail();
        $category = Category::all();
        $komen = comment::all();
        $jml = comment::where('post_id', $id)->count('comment');
        return view('frontend.post.page', compact('blog','post', 'category', 'komen', 'id', 'jml'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function insertdata(Request $request, $id)
    {
        $request->validate([
            'name' =>'required',
            'email' => 'required',
            'comment' => 'required'
        ]);
        
        $user = new comment();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->website = $request->website;
        $user->comment = $request->comment;
        $user->post_id = $id;
        $user->save();

        $slug = Post::where('id', $id)->value('slug');

        return redirect()->action([PostController::class, 'show'], ['post'=>$slug]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    
}
