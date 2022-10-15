<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\testimony;
use  App\Models\contact;

class testimonycontroller extends Controller
{
    

    // new edit

    public function index()
    {
  $testimonies= testimony::paginate(5);
  $contact=contact::where('status','0')->count();
    return view('admin.testimonies.index',  [
        'testimonies'=> $testimonies,
        'contact'=>$contact
    ]);
    }


public function create()
{
    $contact=contact::where('status','0')->count();
return view('admin.testimonies.create',compact('contact'));
}


public function store(Request $request){
             
         $request->validate([
              'name'=>'required',
              'comment'=>'required',
              'photo'=>'required'
         ]);


         $testimony=new testimony();
         $testimony->name=$request->name;
         $testimony->comment=$request->comment;
         if($request->hasfile('photo')){
            $file=$request->file('photo');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/gallery/',$filename);
            $testimony->photo=$filename;
        }
        $testimony->save();
         

         return redirect()->route('testimony.index')->with('status','upload succes fully');
     }




                public function show(testimony $testimony)
               {
                     return view('admin.testimonies.show',compact('testimony'));
              } 


                  public function edit(testimony $testimony)
                  {
                    $contact=contact::where('status','0')->count();
                    return view('admin.testimonies.edit',compact('testimony'),compact('contact'));
                    }
      


                    public function update(Request $request, $id)
                    {
                      

                    $testimony = testimony::find($id);
                    $testimony->name = $request->name;
                    $testimony->comment = $request->comment;
                    if($request->hasFile('photo')) {
                        $image = $request->file('photo');
                        $filename = $image->getClientOriginalName();
                        $image->move(public_path('uploads/gallery'), $filename);
                        $testimony->photo = $request->file('photo')->getClientOriginalName();
                    }
                    $testimony->status = $request->status;
                    $testimony->save();
                    return redirect()->route('testimony.index')
                    ->with('success','testimony Has Been updated successfully');
                    }
                        

                    public function destroy(testimony $testimony)
                    {
                        $testimony->delete();
                        return redirect()->route('testimony.index')
                        ->with('success','testimony has been deleted successfully');
                        }
                        


   
} 
