<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\Response;


use Illuminate\Validation\Rule;

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

   public function create(){

    // if(auth()->guest){
    //     abort(403);
    // }

    if(auth()->user()?->username !== 'maryam1422'){
        abort(403);
    }
    return view('posts.create');
   }

   public function store(){

    $attibutes = request()-> validate([
        'title' => 'required',
        'thumbnail' => 'required|image',
        'slug' => ['required', Rule::unique('posts', 'slug')],
        'excerpt' => 'required',
        'body' => 'required',
        'category_id' => ['required', Rule::exists('categories', 'id')]
      ]);

      $attibutes['user_id'] = auth()->id();
      $attibutes['thumbnail'] = request()->file('thumbnail')->store('thumbnail');


      Post::create($attibutes);

      return redirect('/');

   }
}
