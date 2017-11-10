<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidateBlogPost;
use App\Post;

class ViewpostController extends Controller
{
  public function view(){
    $view = Post::all();


    return view('admin.layout.view', compact('view'));
  }

  public function editPost($id){
    $view= Post::find($id);

    return view('admin.layout.edit', compact('view'));
  }
  public function updatePost($id, ValidateBlogPost $request){

      // $this -> validate(request(), [
      // "title" => "required| max:20",
      // "author" => "required",
      // "body" => "required"]);

      $upd = Post::findorfail($id);
      $update = $upd->update([
      "title"=> request('title'),
      "author"=> request('author'),
      "body"=> request('body')
      ]);

    return redirect()->action('ViewpostController@view');
  }


  public function confirmDelete(){
    $delete;
    return view('admin.layout.delete', compact('delete'));
  }



  public function deletePost($id){
    $post = Post::findOrFail($id);
    $post->delete();
    return redirect()->action('ViewpostController@view');
  }

  public function returnUndelete(){
      $no;

    return redirect()->action('ViewpostController@view');
  }
}
