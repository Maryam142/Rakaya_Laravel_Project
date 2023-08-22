<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Cart;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\Response;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostsConteroller extends Controller
{
    public function index(){

//    $this->authorize('admin');
   return view('posts.index', [
    // 'currentCategory' => Category::firstWhere('slug',request('category')),
    'posts' => Post::latest()->filter(
      request(['search', 'category', 'author'])
    )->paginate(6)->withQueryString()
   ]);
    
   }


public function showposts(Post  $post ){
    return view('posts.showposts', [
        'post' => $post
    ]);
}
public function addcart(Request $request, $id){
    if(Auth::id()){
        $user=auth()->user(); 
        $product= Post::find($id);

        $cart= new Cart;
        $cart->name=$user->name; 
        $cart->price=$product->price; 
        $cart->product_title=$product->title; 
        $cart->save();

        return redirect()->back()->with('success', '!تم اضافة المنتج بنجاح');
    }else{
        return redirect('/login');
    }
}

}