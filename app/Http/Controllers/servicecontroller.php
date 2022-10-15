<?php

namespace App\Http\Controllers;
use  App\Models\service;
use  App\Models\contact;

use Illuminate\Http\Request;

class servicecontroller extends Controller
{
   
 

  public function index()
    {
    $services= service::all();
    $contact=contact::where('status','0')->count();
    return view('admin.service.index',  [
        'services'=> $services,
        'contact'=>$contact
    ]);
    }
    
    
    public function create()
    {
      $contact=contact::where('status','0')->count();
    return view('admin.service.create',compact('contact'));
    }
    
    
    public function store(Request $request){
             $request->validate([
                'servicename'=>'required',
            
                'description'=>'required', 
             ]);
              
              service::create([
                'servicename'=>$request->servicename,
               
                'description'=>$request->description
    
              ]);
    
              return redirect()->route('service.index')->with('status','service upload succesfully');
             
        }
    
    
    
                public function show(service $service)
               {
                     return view('admin.portfolio.show',compact('portfolio'));
              } 
    
    
                  public function edit(service $service)
                  {
                    $contact=contact::where('status','0')->count();
                    return view('admin.service.edit',compact('service'),compact('contact'));
                    }
      
    
    
                    public function update(Request $request, $id)
                    {
                      $request->validate([
                        'servicename'=>'required',
                        
                        'description'=>'required' 
                     ]);

                    $service = service::find($id);
                    $service->servicename = $request->servicename;
                    $service->description = $request->description;
                    $service->status=$request->status;

                  
                   $service->save();
                
                  
                    return redirect()->route('service.index')
                    ->with('status','service  Has Been updated successfully');
                    }
                        
    
                    public function destroy(service $service)
                    {
                        $service->delete();
                        return redirect()->route('service.index')
                        ->with('status','service has been deleted successfully');
                        }


}
