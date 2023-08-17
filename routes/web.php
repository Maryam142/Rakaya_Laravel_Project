<?php

use App\Http\Controllers\PostsConteroller;
use App\Http\Controllers\RegisterConteroller;
use App\Http\Controllers\SessionConteroller;
use App\Http\Controllers\AdminPostsConteroller;


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

Route::get('/',[PostsConteroller::class, 'index'])->name('home');

Route::get('/posts/{post:slug}', [PostsConteroller::class, 'showposts']);

Route::get('register', [RegisterConteroller::class,  'create'])-> middleware('guest');
Route::post('register', [RegisterConteroller::class, 'store'])-> middleware('guest'); 

Route::get('login', [SessionConteroller::class,  'create'])-> middleware('guest');
Route::post('login', [SessionConteroller::class, 'store'])-> middleware('guest');

Route::post('logout', [SessionConteroller::class, 'destroy'])-> middleware('auth'); 

//Admin
Route::post('/admin/posts/create', [AdminPostsConteroller::class, 'store'])-> middleware('admin'); 
Route::get('/admin/posts/create', [AdminPostsConteroller::class, 'create'])-> middleware('admin'); 

// Route::post('/admin/posts', [AdminPostsConteroller::class, 'store'])-> middleware('admin'); 
Route::get('/admin/posts', [AdminPostsConteroller::class, 'index'])-> middleware('admin'); 
Route::get('/admin/posts/{post}/edit', [AdminPostsConteroller::class, 'edit'])-> middleware('admin'); 

Route::patch('/admin/posts/{post}', [AdminPostsConteroller::class, 'update'])-> middleware('admin'); 
Route::delete('/admin/posts/{post}', [AdminPostsConteroller::class, 'destroy'])-> middleware('admin'); 
