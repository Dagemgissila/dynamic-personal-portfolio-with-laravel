<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\profile;
use  App\Models\user;
use  App\Models\contact;
class profilecontroller extends Controller
{
    public function index()
    {
    $profiles= profile::all();
    $contact=contact::where('status','0')->count();
    return view('admin.profile.index',  [
        'profiles'=> $profiles,
        'contact'=>$contact
    ]);

    }

    
    
    public function create()
    {
        $contact=contact::where('status','0')->count();
    return view('admin.profile.create',compact('contact'));
    }
    
    
    public function store(Request $request){

        $request->validate([
            'profiletitle'=>'required',
            'profileSubTitle'=>'required',
            'profileimage'=>'required',
            'aboutMeDescription'=>'required',
            'phonenumber'=>'required',
            'address'=>'required',
            'birthdate'=>'required'
        ]);

        $profile=new profile();
        $profile->user_id=auth()->user()->id;
        $profile->profiletitle=$request->profiletitle;
        $profile->profilesubtitle=request('profileSubTitle');
        if($request->hasFile('profileimage')) {
            $image = $request->file('profileimage');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('uploads/gallery'), $filename);
            $profile->profileimage = $request->file('profileimage')->getClientOriginalName();
         }
        $profile->aboutMeDescription=$request->aboutMeDescription;
        $profile->phonenumber=$request->phonenumber;
        $profile->address=$request->address;
        $profile->birthdate=$request->birthdate;
        
     
        $profile->save();
        return redirect()->route('profile.index')->with('status','profile  upload succesfully');

      

    }
    
    
    
                public function show(profile $profile)
               {
                     return view('admin.profile.show',compact('profile'));
              } 
    
    
                  public function edit(profile $profile)
                  {
                    $contact=contact::where('status','0')->count();
                    return view('admin.profile.edit',compact('profile'),compact('contact'));
                    }
      
    
    
                    public function update(Request $request, $id)
                    {
                     $request->validate([

                  
            
                     ]);
                     $profile=profile::find($id);
        $profile->user_id=auth()->user()->id;
        $profile->profiletitle=$request->profiletitle;
        $profile->profilesubtitle=request('profileSubTitle');
        if($request->hasFile('profileimage')) {
            $image = $request->file('profileimage');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('uploads/gallery'), $filename);
            $profile->profileimage = $request->file('profileimage')->getClientOriginalName();
         }
         $profile->status=$request->status;
        $profile->aboutMeDescription=$request->aboutMeDescription;
        $profile->phonenumber=$request->phonenumber;
        $profile->address=$request->address;
        $profile->birthdate=$request->birthdate;
        
     
        $profile->save();
        return redirect()->route('profile.index')->with('status','profile  update succesfully');
                    }
                        
    
                    public function destroy(profile $profile)
                    {
                        $profile->delete();
                        return redirect()->route('profile.index')
                        ->with('status','profile has been deleted successfully');
                        }

}
