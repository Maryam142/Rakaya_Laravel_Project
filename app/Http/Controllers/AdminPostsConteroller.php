<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\Response;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class AdminPostsConteroller extends Controller
{



    
public function create(){


    if(auth()->user()?->username !== 'maryam1422'){
        abort(403);
    }
    return view('admin.posts.create');
}

protected function validatePost(?Post $post = null): array{
    $post ??= new Post();

    return request()->validate([
        'title' => 'required',
        'thumbnail' => $post->exists ? ['image'] : ['required', 'image'],
        'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post)],
        'excerpt' => 'required',
        'body' => 'required',
        'category_id' => ['required', Rule::exists('categories', 'id')]
    ]);
}

public function store(){
    Post::create(array_merge($this->validatePost(), [
        'user_id' => request()->user()->id,
        'thumbnail' => request()->file('thumbnail')->store('thumbnails')
    ]));

    return redirect('/');
}
public function index(){

    return view('admin.posts.index', [
        'posts'=> Post::paginate(50)
     ]); 
}


public function delete(){
}

public function edit(Post $post){
    return view('admin.posts.edit', ['post' => $post]);
}

public function update(Post $post){

    $attributes = $this->validatePost($post);

    if ($attributes['thumbnail'] ?? false) {
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
    }

    $post->update($attributes);

    return back()->with('success', '!تم تحديث المنتج');
}

public function destroy(Post $post){
    $post->delete();

    return back()->with('success', '!تم حث المنتج');
}

}
