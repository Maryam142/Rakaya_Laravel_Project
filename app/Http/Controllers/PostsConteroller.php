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
        'posts' =>Post::latest()->filter(request('search'))->get(),
        'categories' => Category::all()
    ]);
   }


   public function showposts(Post  $post  ){
    return view('post', [
        'post' => $post
    ]);
   }
 
}
