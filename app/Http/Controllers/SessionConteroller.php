<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionConteroller extends Controller{

    public function store(){

        //1. validat request:
        $attributes = request()->validate([
            'email'   => 'required|email',
            'password' => 'required',
        ]);
        //2. successful authenticate-> credentials-> redirect:
        if(auth()->attempt($attributes)){
            session()->regenerate();
            return redirect('/')->with('success', 'أهلًا بك');
        }
        //3. failed authenticate-> credentials-> redirect:
          throw ValidationException::withMessages([
            'email'=>'هذا البريد الالكتروني غير صالح' 
          ]);
            // return back()
            // ->withInput()
            // ->withErrors(['email'=>'هذا البريد الالكتروني غير صالح']);  

    }

    public function create(){
        return view('sessions.create');
    
    }

public function destroy(){
    auth()->logout();
    return redirect('/')->with('success', 'الى اللقاء');

}
}
