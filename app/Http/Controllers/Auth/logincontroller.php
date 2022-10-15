<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    public function index(){
          return view('auth.login');
    }
    public function store(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(!auth()->attempt($request->only('email','password'))){
         return back()->with('error','invalid login detail');
        }
 
        return redirect('dashboard');
     }
    
}
