<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use Auth;

class logincontroller extends Controller
{
    public function index(){
      return  view('auth.login');

    }

    public function store(Request $request){
        $request->validate([
          
          'email'=>'required|email',
          'password'=>'required',
         
        ]);

        if(!auth()->attempt($request->only('email','password'))){
            return redirect()->back()->with('error','invalid login detail');
           }
    
           return redirect()->route('dashboard');
      }

}
