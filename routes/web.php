<?php

use App\Http\Controllers\PostsConteroller;
use App\Http\Controllers\RegisterConteroller;

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

Route::get('register', [RegisterConteroller::class, 'create']);
Route::post('register', [RegisterConteroller::class, 'store']);

