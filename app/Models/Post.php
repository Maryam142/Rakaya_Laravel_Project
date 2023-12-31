<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters){

        $query->when($filters['search']?? false, function($query, $search){
            $query->where(fn($query)=> $query->where ('title', 'like', '%'.$search.'%')
            ->orWhere ('body', 'like', '%'.$search.'%')
        );
        });
        
        
        $query->when($filters['category']?? false, function($query, $category){
            $query->whereHas('category', fn ($query) =>
            $query->where('slug', $category)
           );
        });

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn ($query) =>
                $query->where('username', $author)
            )
        );
      
    }


    public function category(){ 
        //make an elquent relationship
     return $this -> belongsTo(Category::class);  
    }

    public function comments(){ 
        //make an elquent relationship
        return $this -> hasMany(Comment::class);
  
    }

    public function author(){ 
        //make an elquent relationship
        return $this -> belongsTo(User::class,'user_id');
  
    }
} 
