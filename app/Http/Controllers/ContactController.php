<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller


{

    public function index()
    {
    $Contac= Contact::all();
    $Contact=Contact::where('status','0')->count();

    return view('admin.contact.index',  [
        'contac'=> $Contac,
        'contact'=>$Contact
    ]);
    }
    public function see($id){
        $Contact=Contact::find($id);
        $Contact->status=1;
        $Contact->save();
        return redirect()->back();
         
    }
    public function store(Request $request)
    {
        
        $validate=$request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
         
           
        ]);
        if($validate){
            Contact::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'message'=>$request->message
            ]);
      
            return redirect()->back()
                             ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);

        }
        else{
            return redirect()->route('/#contact');
        }
  
      
    }
}
