<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests\ValidateBlogPost;


use App\Post;

class AddpostController extends Controller
{
  public function displayAdmin(){
    $posts;
    return view('admin.login', compact('posts'));
  }
  public function displayAdminReg(){

    $posts;
    return view('admin.layout.register', compact('posts'));
  }
  public function displayAddPost(){

    $posts;
    return view('admin.layout.addpost', compact('posts'));
  }
  public function displayView(){

    $posts;
    return view('admin.layout.view', compact('posts'));
  }

  public function publishPost(ValidateBlogPost $request){
    // $post = new Post;
    // $post->title =request('title');
    // $post->author =request('author');
    // $post->body =request('body');
    //
    //
    //
    // $post->save();

//validation below now on request


    // $this -> validate(request(), [
    //   "title" => "required| max:20",
    //   "author" => "required",
    //   "body" => "required"]);
    // $this -> validate();


    Post::create([
      "title"=> request('title'),
      "author"=> request('author'),
      "body"=> request('body')
    ]);


      return view('admin.layout.addpost', compact('posts'));

  }
}
