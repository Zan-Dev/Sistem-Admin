<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function loginForm(){
        return view("sessions.login");
    }

    function authenticate(Request $request){        
        $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)){
            return redirect('/');
        } else {
            return redirect()->back()->with('error', 'Masukkan Email dan Password Yang Benar');            
        }    
    }

    function logout(){
        Auth::logout();
        return redirect('login');
    }        
}
