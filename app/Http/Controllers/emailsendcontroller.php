<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendmail;

class emailsendcontroller extends Controller
{
    
    function send(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ]);

        $data=array(
            'name'=>$request->name,
            'message'=>$request->message,
            'email'=>$request->email
        );
        Mail::to(request('email'))->send(new SendMail($data));
        return back();
        
    }
}
