<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\contact;
use Hash;
class createaccounteController extends Controller
{
    public function index()
    {
    $users= user::all();
    $contact=contact::where('status','0')->count();
    return view('admin.createaccounte.index',  [
        'users'=> $users,
        'contact'=>$contact
    ]);
    }
    
    
    public function create()

    {
        $contact=contact::where('status','0')->count();
    return view('admin.createaccounte.create',[
        'contact'=>$contact
    ]);
    }
    
    
    public function store(Request $request){
        $request->validate([
            'fullname'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6',
          
          ]);
    
           
          user::create([
            'fullname'=>$request->fullname,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role'=>$request->role
    
           ]);
         
           
    
           return redirect()->route('createaccounte.index')->with('status','account create succes fully');
    
        }
    
    
    
    
      
    
    
                   
    
                    public function destroy(user $user)
                    {
                        $user->delete();
                        return redirect()->route('createaccounte.index')
                        ->with('status','account has been deleted successfully');
                        }

                        
                   
}
