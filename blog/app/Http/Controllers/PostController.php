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
        return redirect('/posts');
    }
}
