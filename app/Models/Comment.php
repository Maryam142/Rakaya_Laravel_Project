<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;


    public function post(){ 
        //make an elquent relationship
     return $this -> belongsTo(Post::class, 'post_id');  
    }

    public function user(){ 
        //make an elquent relationship
     return $this -> belongsTo(User::class, 'user_id');  
    }
}
