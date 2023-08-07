<?php
use App\Models\Card;
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

    $files = File::files(resource_path("/Cards/"));


//  $Cards = collect( File::files(resource_path("/Cards/")))
//     ->map(function ($file){
//         return YamlFrontMatter::parseFile($file);
//     })
//     ->map(function ($file){
//         return new Card(
//             $document->title,
//             $document->excerpt,
//             $document->date,
//             $document->slug,
//             $document->body()
//         );
//     })
    return view('Cards',[
        'card' => Card::all()
    ]);
}); 


Route::get('/Cards/{card}', function ($slug) {   
    //Card is class(model) contain find function
    
    return view('card', [
        'card' => Card::find($slug)
    ]);
    
});
