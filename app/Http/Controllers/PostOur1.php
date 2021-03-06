<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;


class PostOur1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts= posts::all();
        return view('posts.index')->with("post_table",$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this ->validate($request,[
           'title'=> "required",
           "body"=>"required"
       ]);
        $posts =new Posts;
        $posts->title =$request-> input("title");
        $posts->body =$request->input('body');
        $posts->save();
        return redirect('/posts')->with('success','post crested');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $posts=posts::find($id);


        return view('posts.show')->with("posts", $posts);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts=posts::find($id);
        return view('posts.edit')->with("posts", $posts);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this ->validate($request,[
            'title'=> "required",
            "body"=>"required"
        ]);
         $posts =Posts::find($id);
         $posts->title =$request-> input("title");
         $posts->body =$request->input('body');
         $posts->save();
         return redirect('/posts')->with('success','post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts =Posts::find($id);
        $posts->delete();
        return redirect("/posts")->with('success','post deleted');

    }
}
