<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gallery;
use App\Models\contact;


use Illuminate\Support\Facades\Response;

class gallerycontroller extends Controller

{
   


     public function index()
     {
     $galleries= gallery::paginate(10);
     $contact=contact::where('status','0')->count();
     return view('admin.gallery.index',  [
         'galleries'=> $galleries,
         'contact'=>$contact
     ]);
     }
     
     
     public function create()
     {
        $contact=contact::where('status','0')->count();
     return view('admin.gallery.create',[
        'contact'=>$contact
     ]);
     }
     
     
     public function store(Request $request){

        $this->validate($request, [
            
            'image' => 'required|image|max:2040',
        ]);

        $gallery=new gallery();
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/gallery/',$filename);
            $gallery->image=$filename;
        }
        $gallery->save();
       

        return redirect()->route('gallery.index')->with('status','image upload successfully');

    }
     
     
     
                 public function show(gallery $gallery)
                {
                      return view('admin.gallery.show',compact('gallery'));
               } 
     
     
                   public function edit(gallery $gallery)
                   {
                    $contact=contact::where('status','0')->count();
                     return view('admin.gallery.edit',compact('gallery'),compact('contact'));
                     }
       
     
     
                     public function update(Request $request, $id)
                     {
                        $this->validate($request, [
            
                         
                        ]);
     
                     $gallery = gallery::find($id);
                     if($request->hasFile('image')) {
                        $image = $request->file('image');
                        $filename = $image->getClientOriginalName();
                        $image->move(public_path('uploads/gallery'), $filename);
                        $gallery->image = $request->file('image')->getClientOriginalName();
                     }
                     $gallery->status=$request->status;
                    
                 
                     $gallery->save();
                     return redirect()->route('gallery.index')
                     ->with('status','image  Has Been updated successfully');
                     }
                         
     
                     public function destroy(gallery $gallery)
                     {
                         $gallery->delete();
                         return redirect()->route('gallery.index')
                         ->with('status','image has been deleted successfully');
                         }
}
