<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function getRouteKeyName(){
    //     return 'slug' ;
    // } 

    public function category(){ 
        //make an elquent relationship
        return $this -> belongsTo(Category::class);
  
    }
} 
