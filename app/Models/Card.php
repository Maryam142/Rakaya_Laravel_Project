<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;



class Card {
    // public $title;
    // public $excerpt;
    // public $date;
    // public $body;
    // public $slug;


    // public function __construct($title, $excerpt, $date, $body, $slug){
        
    //     $this -> title    = $title;
    //     $this -> excerpt = $excerpt;
    //     $this -> date    = $date;
    //     $this -> slug    = $slug;    
    // }



    // public static function allYaml(){
    //     collect( File::files(resource_path("/Cards/")))
    //     ->map(function ($file){
    //         return YamlFrontMatter::parseFile($file);
    //     })
    //     ->map(function ($document){
    //         return new Card(
    //             $document->title,
    //             $document->excerpt,
    //             $document->date,
    //             $document->slug,
    //             $document->body()
    //         );
    //     });
    // }
    

    public static function all(){
       return $files = File::files(resource_path("/Cards/"));

       array_map(function($file){
 
        return $file -> getContents();
       }, $files);
    }

    public static function find($slug){

    $path = resource_path("/Cards/{$slug}.html");
    if (!file_exists($path)) {
        // abort(404);
        throw new ModelNotFoundException(); 
    }
   return $card = file_get_contents($path);

// chaching:   
//    return cache()-> remember("/Cards/{$slug}", 1200, function() use ($path){
//     return file_get_contents($path);
//    });
    }

}

?>
