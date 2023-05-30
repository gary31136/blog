<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//wrong path on video
use App\Models\Post;

class PostController extends Controller
{
    //admin page
    public function admin(){
        $posts = Post::all();
        return view('posts.admin', ['posts'=> $posts]);
    }

    //index page
    public function index(){
        $posts = Post::all();
        return view('posts.index', ['posts'=> $posts]);
    }

    //create page
    public function create(){
        return view('posts.create');
    }

    //store page
    public function store(Request $request){
        $post = new Post;
        $post->fill($request->all());
        // $post->user_id = Auth::id();
        $post->save();

        //redirect to index
        return redirect('/posts/admin');
    }

    //read page
    public function show(Post $post){
        return view('posts.showByAdmin', ['post'=> $post]);
    }

    //edit page
    public function edit(Post $post){
        return view('posts.edit', ['post' => $post]);
    }

    //update page
    public function update(Request $request, Post $post){
        $post->fill($request->all());
        $post->save();

        return redirect('/posts/admin');
    }
}
