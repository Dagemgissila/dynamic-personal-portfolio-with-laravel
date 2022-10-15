<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\homesetting;
use  App\Models\contact;



class settingcontroller extends Controller
 {
   

      public function index(){
        $homesettings=homesetting::all();
        $contact=contact::where('status','0')->count();
        return view('admin.setting.index',[
            'homesettings'=>$homesettings,
            'contact'=>$contact
        ]);

     }

    public function create()
    {
      $contact=contact::where('status','0')->count();
    return view('admin.setting.create',compact('contact'));
    }
    
    
    public function store(Request $request){
      $request->validate([
      
        
        'homephoto'=>'required',
     
        'logo'=>'required'
                 
      
               ]);
               $setting=new homesetting();
            
               if($request->hasFile('homephoto')) {
                  $image = $request->file('homephoto');
                  $filename = $image->getClientOriginalName();
                  $image->move(public_path('uploads/gallery'), $filename);
                  $setting->homephoto = $request->file('homephoto')->getClientOriginalName();
               }

             

               if($request->hasFile('logo')) {
                $image = $request->file('logo');
                $filename = $image->getClientOriginalName();
                $image->move(public_path('uploads/gallery'), $filename);
                $setting->logo = $request->file('logo')->getClientOriginalName();
             }

               
               $setting->save();
               return redirect()->route('homesetting.index')->with('status','setting  upload succesfully');

    }
    
    
    
//                 public function show(homesetting $homesetting)
//                {
//                      return view('admin.setting.show',compact('homesetting'));
//               } 
    
    
                  public function edit(homesetting $homesetting)
                  {
                     
                     $contact=contact::where('status','0')->count();
                    return view('admin.setting.edit',compact('homesetting'),compact('contact'));
                    }
      
    
    
                    public function update(Request $request, $id)
                    {
                     $request->validate([

                       
            
                     ]);
                     $setting=homesetting::find($id);
                    
                     if($request->hasFile('homephoto')) {
                        $image = $request->file('homephoto');
                        $filename = $image->getClientOriginalName();
                        $image->move(public_path('uploads/gallery'), $filename);
                        $setting->homephoto = $request->file('homephoto')->getClientOriginalName();
                     }
      
                  
      
                     if($request->hasFile('logo')) {
                      $image = $request->file('logo');
                      $filename = $image->getClientOriginalName();
                      $image->move(public_path('uploads/gallery'), $filename);
                      $setting->logo = $request->file('logo')->getClientOriginalName();
                   }
      
                     
                     $setting->save();
                     return redirect()->route('homesetting.index')->with('status','setting  update succesfully');
                    }
                        
    
                    public function destroy(homesetting $homesetting)
                    {
                        $homesetting->delete();
                        return redirect()->route('homesetting.index')
                        ->with('status','setting has been deleted successfully');

                        }


}
