<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    //
    /*public function showBlog ()
    {
      return view ('blog.index');
    }*/
    public function showBlog ()
    {
      $posts = Post::paginate(3);
      return view ('blog.index',['posts'=>$posts]);
    }
}
