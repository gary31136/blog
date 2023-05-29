<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//wrong path on video
use App\Models\Post;

class PostController extends Controller
{
    //index page
    public function index(){
        //
        $posts = Post::all();
        return view('posts.index', ['posts'=> $posts]);
    }

    //

}
