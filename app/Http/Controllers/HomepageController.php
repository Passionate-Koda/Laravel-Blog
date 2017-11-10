<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class HomepageController extends Controller
{
  public function show() {
    $posts = Post::all();

    return view('blog.layout.main', compact('posts'));

  }

  public function displayPosts($id){

$posts = Post::find($id);
    return view('blog.layout.postview', compact('posts'));
  }

  
}
