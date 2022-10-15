<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\aboutme;

class aboutmeController extends Controller
{
    public function index(){
        $aboutmes=aboutme::all();
        return view('admin.aboutme',[
             'aboutmes'=>$aboutmes
        ]);
    }
    public function store(Request $request){

    }

    public function delete($id){
        $data=aboutme::find($id);
        $data->delete();
        return redirect()->back()->with('delete','row delete succesfully');
  
     }
}
