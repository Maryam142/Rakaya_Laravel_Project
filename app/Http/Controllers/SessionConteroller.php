<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionConteroller extends Controller
{
public function destroy(){
    auth()->logout();
    return redirect('/')->with('success', 'الى اللقاء');

}
}
