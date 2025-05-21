<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public  function index(Request $request){
        $posts = Post::paginate(5);
        return view("posts.index", compact("posts"));
    }public function create(Request $request){
        return view("posts.create");
    }
    public function store(Request $request){

        $request->validate([
            "title"=>"required",
            "body"=>"required"
        ]);
       Post::create([
        "title" => $request->title,
        "body" => $request->body
       ]);
       return redirect()->route("posts.index");

    }
    public function edit(Request $request, $id){
        $post = Post::find($id);

        return view("posts.edit", compact("post"));
    }
  public function update(Request $request, $id){
    $request->validate([
        "title"=>"required",
        "body"=>"required"
    ]);
    $post = Post::find($id);
    $post->title = $request->title;
    $post->body = $request->body;
    $post->save();
    // dd($request->all());

    return redirect()->route("posts.index");
  }

  public function show(Request $request, $id){
    $post = Post::find($id);

    return view("posts.show", compact("post"));
}

public function destroy(Request $request, $id){
    $post = Post::find($id);
    $post->delete();
    return redirect()->route("posts.index");
}
}

 

