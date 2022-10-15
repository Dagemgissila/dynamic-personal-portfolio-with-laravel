<?php

namespace App\Http\Controllers;
use App\Models\user;
use App\Models\contact;
use Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{
  public function index(){
    return  view('auth.login');

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
         'password'=>Hash::make($request->password)

        ]);
           
        return redirect()->route('login');
    }
 
    public function loginuser(Request $request){

      $request->validate([
     
        'email'=>'required|email',
        'password'=>'required',
       
      ]);

      $user=user::where('email','=',$request->email)->first();
      if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('name',$user->fullname);
                return redirect('dashboard');
            }
            else{
              return redirect()->back()->with('error','incorrect  password');
            }
      }

      else{
           return redirect()->back()->with('error','incorrect email');
      }

    }

    public function changepassword() {
      $contact=contact::where('status','0')->count();
      return view('auth.changepassword',compact('contact'));
  }

  public function updatePassword(Request $request)
{
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
}
    public function changePasswordPost(Request $request)
   {
      if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
          // The passwords matches
          return redirect()->back()->with("status","Your current password does not matches with the password.");
      }

      if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
          // Current password and new password same
          return redirect()->back()->with("status","New Password cannot be same as your current password.");
      }

      $validatedData = $request->validate([
          'current-password' => 'required',
          'new-password' => 'required|string|min:6|confirmed',
      ]);

      //Change Password
      $user = Auth::user();
      $user->password = Hash::make($request->new-password);
      $user->save();

      return redirect()->route('changepassword')->with("status","Password successfully changed!");
  }

  }

  



