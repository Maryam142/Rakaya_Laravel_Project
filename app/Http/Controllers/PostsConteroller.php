<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;

use Illuminate\Http\Request;

class PostsConteroller extends Controller
{
    public function index(){
    return view('posts', [
        'categories' => Category::all(),
        'posts' =>Post::latest()->filter(request(['search']))->paginate(6)
    ]);
   }


   public function showposts(Post  $post  ){
    return view('post', [
        'post' => $post
    ]);
   }
}
