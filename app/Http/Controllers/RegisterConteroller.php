<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class RegisterConteroller extends Controller{
    
    public function create(){
        return view('register.create');
    }

    public function store(){
      $attibutes = request()-> validate([
        'name' => 'required|max:255',
        'username' => 'required|min:3|max:255|unique:users,username',
        'email' => 'required|email|max:255|unique:users,email',
        'password' => 'required|min:7|max:255',
      ]);
      
    //   $attibutes['password'] = bcrypt($attibutes['password']);

      User::create($attibutes);
      return redirect('/')->with('success', '!تم انشاء الحساب بنجاح');
    }
}
