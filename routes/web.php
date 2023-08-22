<?php

use App\Http\Controllers\PostsConteroller;
use App\Http\Controllers\RegisterConteroller;
use App\Http\Controllers\SessionConteroller;
use App\Http\Controllers\AdminPostsConteroller;
use App\Http\Controllers\PostCommentsConteroller;
use App\Http\Controllers\NewsletterController;

use Illuminate\Validation\ValidationException;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

Route::post('newsletter', function () {

    request()->validate(['email' => 'required|email']);

    $mailchimp = new MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us21'
    ]);

    try{

    $response = $mailchimp->lists->addListMember('0e4ba8f4e0',[
            "email_address" => request('email'),
            "status" => "subscribed",
    ]);
    }catch(\Exception $e){

        throw ValidationException::withMessages([
            'email' => 'هذا البريد الالكتروني غير صالح'
        ]);
    }


    return Redirect('/')->with('success', 'تم اشتراكك في نشرة وااو الالكترونية');

});


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

Route::get('/', [PostsConteroller::class, 'index'])->name('home');

Route::get('/posts/{post:slug}', [PostsConteroller::class, 'showposts']);
Route::post('posts/{post:slug}/comments', [PostCommentsConteroller::class, 'store']);


Route::get('register', [RegisterConteroller::class,  'create'])->middleware('guest');
Route::post('register', [RegisterConteroller::class, 'store'])->middleware('guest');

Route::get('login', [SessionConteroller::class,  'create'])->middleware('guest');
Route::post('login', [SessionConteroller::class, 'store'])->middleware('guest');

Route::post('logout', [SessionConteroller::class, 'destroy'])->middleware('auth');

//Admin
Route::middleware('can:admin')->group(function () {
    Route::resource('/admin/posts', AdminPostsConteroller::class);
    //
    // Route::post('/admin/posts/create', [AdminPostsConteroller::class, 'store']); 
    // Route::get('/admin/posts/create', [AdminPostsConteroller::class, 'create']); 

    // Route::get('/admin/posts', [AdminPostsConteroller::class, 'index']); 
    // Route::get('/admin/posts/{post}/edit', [AdminPostsConteroller::class, 'edit']); 

    // Route::patch('/admin/posts/{post}', [AdminPostsConteroller::class, 'update']); 
    // Route::delete('/admin/posts/{post}', [AdminPostsConteroller::class, 'destroy']); 

});
