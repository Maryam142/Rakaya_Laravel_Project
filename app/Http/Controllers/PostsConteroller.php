<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;

use Illuminate\Http\Request;

class PostsConteroller extends Controller
{
    public function index(){
   
   return view('posts.index', [
    'currentCategory' => Category::firstWhere('slug',request('category')),
    'posts' => Post::latest()->filter(
      request(['search', 'category', 'author'])
    )->paginate(6)->withQueryString()
   ]);
   
    // return view('posts.index', [
    //     'posts' =>Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6),
    //     'currentCategory' => Category::firstWhere('slug',request('category'))
    // ]);
   }


   public function showposts(Post  $post  ){
    return view('posts.showposts', [
        'post' => $post
    ]);
   }
}
