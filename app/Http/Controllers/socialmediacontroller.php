<?php

namespace App\Http\Controllers;
use App\Models\socialmedia;
use App\Models\contact;

use Illuminate\Http\Request;

class socialmediacontroller extends Controller
{

    public function index(){
        $socialmedias=socialmedia::all();
        $contact=contact::where('status','0')->count();
        return view('admin.socialmedia.index', [
             'socialmedias'=>$socialmedias,
             'contact'=>$contact
        ]);
    }


    public function create()
{
    $contact=contact::where('status','0')->count();
return view('admin.socialmedia.create',compact('contact'));
}
    public function store(Request $request){
       $request->validate([
        'socialmediaicon'=>'required',
        'url'=>'required'
       ]);
    

    socialmedia::create([
        'socialmediaicon'=>$request->socialmediaicon,
        'url'=>$request->url
         
    ]);
    return redirect()->route('socialmedia.index')->with('success','upload succesfully');

   }


   public function show(socialmedia $socialmedia)
   {
         return view('admin.socialmedia.show',compact('socialmedia'));
  } 

  public function edit(socialmedia $socialmedia)
  {
    return view('admin.socialmedia.edit',compact('socialmedia'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'socialmediaicon'=>'required',
            'url'=>'required'
           ]);
           $socialmedia = socialmedia::find($id);
           $socialmedia->socialmediaicon = $request->socialmediaicon;
           $socialmedia->url = $request->url;
         
          $socialmedia->save();

  

  
    return redirect()->route('socialmedia.index')
    ->with('status','socialmedia information Has Been updated successfully');
    }

   public function destroy(socialmedia $socialmedia)
   {
       $socialmedia->delete();
       return redirect()->route('socialmedia.index')
       ->with('status',' deleted successfully');
       }
       

}
