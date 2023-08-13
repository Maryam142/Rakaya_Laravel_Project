<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $with = ['category', 'author'];
    protected $guarded = [];

    public function scopeFilter($query, array $filters){

        $query->when($filters['search']?? false, function($query, $search){
            $query 
            ->where ('title', 'like', '%'.$search.'%')
            ->orWhere ('body', 'like', '%'.$search   .'%');
        });
      
    }


    public function category(){ 
        //make an elquent relationship
        return $this -> belongsTo(Category::class);
  
    }
    public function author(){ 
        //make an elquent relationship
        return $this -> belongsTo(User::class,'user_id');
  
    }
} 
