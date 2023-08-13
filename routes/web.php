<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

use Spatie\YamlFrontMatter\YamlFrontMatter;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts=Post::latest();

    if(request('search')){
        $posts 
        ->where ('title', 'like', '%'.request('search').'%')
        ->orWhere ('body', 'like', '%'.request('search').'%');
    }

    return view('posts', [
        'posts' => $posts->get(),
        'categories' => Category::all()
    ]);
});


Route::get('/posts/{post:slug}', function (Post $post) {
    //Card is class(model) contain find function
 
    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts ,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
});


Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts,
        'categories' => Category::all()
    ]);
});
