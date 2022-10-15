<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\blog;
use  App\Models\user;
use  App\Models\subscription;
use  App\Models\socialmedia;
use  App\Models\contact;
use  App\Models\homesetting;
use  App\Models\profile;
use App\Notifications\EmailNotification;
use Notification;

class blogcontroller extends Controller
{
   public function userview(){
  
    $blogs=blog::paginate(10)->where('status','1');
    $homesetting=homesetting::all()->where('id','4');
    $socialmedia=socialmedia::all();
    $profile=profile::all();

   return view('client.blog',[
   'blogs'=>$blogs,
   'homesetting'=>$homesetting,
   'socialmedia'=>$socialmedia,
   'profiles'=>$profile

   ]);
   }

   

public function index()
{
    $contact=contact::where('status','0')->count();
$blogs= blog::all();
return view('admin.blogs.index',  [
    'blogs'=> $blogs,
    'contact'=>$contact
]);
}


public function create()
{
    $contact=contact::where('status','0')->count();
return view('admin.blogs.create',[
    'contact'=>$contact
]);
}


public function store(Request $request){
        $request->validate([
            'topic'=>'required',
            'content'=>'required',
            'image'=>'required|image'
       ]);

       
       $blogs=new blog();
       $blogs->topic=$request->topic;
      
       $blogs->content=$request->content;
       if($request->hasfile('image')){
          $file=$request->file('image');
          $extension=$file->getClientOriginalExtension();
          $filename=time().'.'.$extension;
          $file->move('uploads/gallery/',$filename);
          $blogs->image=$filename;
      }
      $blogs->user_id=auth()->user()->id;
   
     
      $blogs->save();
      
     
       

       return redirect()->route('blog.index')->with('status','upload succes fully');

    }




            public function show(blog $blog)

           {
                 return view('client.singleblog',compact('blog'));
          } 


              public function edit(blog $blog)

              {
                $contact=contact::where('status','0')->count();
                return view('admin.blogs.edit',compact('blog'),compact('contact'));
                }
  


                public function update(Request $request, $id)
                {
                   

                $blog = blog::find($id);
                $blog->topic = $request->topic;
                $blog->content = $request->content;
                if($request->hasFile('image')) {
                    $image = $request->file('image');
                    $filename = $image->getClientOriginalName();
                    $image->move(public_path('uploads/gallery'), $filename);
                    $blog->image = $request->file('image')->getClientOriginalName();
                }
                $blog->status=$request->status;
                $blog->save();
                return redirect()->route('blog.index')
                ->with('success','blog Has Been updated successfully');
                }
                    

                public function destroy(blog $blog)
                {
                    $blog->delete();
                    return redirect()->route('blog.index')
                    ->with('success','Company has been deleted successfully');
                    }
                    



}
