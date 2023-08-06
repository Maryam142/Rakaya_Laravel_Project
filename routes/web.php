<?php
use App\Models\Card;
use Illuminate\Support\Facades\Route;
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
    return view('Cards');
});


Route::get('/Cards/{card}', function ($slug) {   
    //Card is class(model) contain find function
    
    return view('card', [
        'card' => Card::find($slug)
    ]);
    
});
