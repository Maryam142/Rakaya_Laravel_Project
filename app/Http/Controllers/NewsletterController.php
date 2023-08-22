<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Exception;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    // public function __invoke(Newsletter $newsletter)
    // {
    //     request()->validate(['email' => 'required|email']);

    //     try {
    //         $newsletter->subscribe(request('email'));
    //     } catch (Exception $e) {
    //         throw ValidationException::withMessages([
    //             'email' => 'هذا البريد الالكتروني غير صالح'
    //         ]);
    //     }
    
    
    //     return Redirect('/')->with('success', 'تم اشتراكك في نشرة وااو الالكترونية');
    //  }

}