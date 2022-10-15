<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\experience;
use  App\Models\contact;

class experiencecontroller extends Controller
{
   


    //new


    public function index()
    {
    $experiences= experience::all();
    $contact=contact::where('status','0')->count();
    return view('admin.experience.index',  [
        'experiences'=> $experiences,
        'contact'=>$contact
    ]);
    }
    
    
    public function create()
    {
        $contact=contact::where('status','0')->count();
    return view('admin.experience.create',[
        'contact'=>$contact
    ]);
    }
    
    
    public function store(Request $requst){
        $requst->validate([
             'companyname'=>'required',
             'responsibility'=>'required',
             'duration'=>'required'
        ]);

        experience::create([
           'companyname'=>$requst->companyname,
           'responsibility'=>$requst->responsibility,
           'duration'=>$requst->duration,
        ]);
        return redirect()->route('experience.index')->with('status','experience detail  upload succesfully');

    }
    
    
    
                public function show(gallery $gallery)
               {
                     return view('admin.experience.show',compact('gallery'));
              } 
    
    
                  public function edit(experience $experience)
                  {
                    $contact=contact::where('status','0')->count();
                    return view('admin.experience.edit',compact('experience'),compact('contact'));
                    }
      
    
    
                    public function update(Request $request, $id)
                    {
                        $request->validate([
                            'companyname'=>'required',
                            'responsibility'=>'required',
                            'duration'=>'required'
                       ]);
                    $experience = experience::find($id);
                    $experience->companyname = $request->companyname;
                    $experience->responsibility = $request->responsibility;
                    $experience->duration = $request->duration;
                    $experience->status=$request->status;
                   $experience->save();
                
                  
                    return redirect()->route('experience.index')
                    ->with('status','experience information Has Been updated successfully');
                    }
                        
    
                    public function destroy(experience $experience)
                    {
                        $experience->delete();
                        return redirect()->route('experience.index')
                        ->with('success','Company has been deleted successfully');
                        }
}
