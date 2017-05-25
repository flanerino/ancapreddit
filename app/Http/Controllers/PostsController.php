<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\post;

class PostsController extends Controller
{
    public function index(){

      $posts = Post::all();


      return view ('posts/index')->with(['posts' => $posts]);
    }

    public function show(Post $post){

      return view ('posts/show')->with(['post' => $post]);
    }
}
