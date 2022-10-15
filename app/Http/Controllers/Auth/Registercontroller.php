<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use Hash;
use Session;

class Registercontroller extends Controller
{
     public function _constract(){
        $this->middleware(['guest']);
     }
    public function index(){
        return view('auth.register');
    }   
    public function store(Request $request){
            
     $request->validate([
          'fullname'=>'required',
          'email'=>'required|email',
          'password'=>'required|confirmed',
          'password_confirmation'=>'required'
        ]);

         user::create([
            'fullname'=>$request->fullname,
          
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
         ]);
        // auth->attempt($request->only('email','password'));
         return redirect('login');


         
    }
}
