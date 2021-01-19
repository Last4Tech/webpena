<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use App\Http\Controllers\PostController;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
            'website' => 'required',
            'comment' => 'required',
        ]);
        $hasil = Post::find($id);
        $slug = Post::where('id', $id)->value('slug');
        $user = new comment();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->website = $request->website;
        $user->comment = $request->comment;
        $user->post_id = $request->id;
        $user->save();

        return redirect()->action([PostController::class, 'show'], ['post'=>$slug]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
