<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Auth;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index',['posts'=>$posts]);
    }
    public function show(Post $post){
        return view('posts.show',['post'=>$post]);
    }

    public function create()
    {
         $categories = Category::all();
         return view('posts.create', ['categories' => $categories]);
    }
   public function store(Request $request)
   {
    $post = new Post();
    $post->title = $request->title;
    $post->description = $request->description;
    $post->content = $request->content;
    $post->category_id = $request->category_id;
    $post->user_id = Auth::id();
    $post->save();

    return redirect()->route('posts.index');
   }
}
