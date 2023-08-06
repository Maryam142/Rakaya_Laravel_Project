<?php

namespace App\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Card {


    public static function find($slug){

    $path = resource_path("/Cards/{$slug}.html");
    if (!file_exists($path)) {
        // abort(404);
        throw new ModelNotFoundException(); 
    }
//    return $card = file_get_contents($path);

   return cache()-> remember("/Cards/{$slug}", 1200, function() use ($path){
    return file_get_contents($path);
   });
    }

}

?>
