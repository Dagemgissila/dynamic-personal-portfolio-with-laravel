<?php

namespace App\Http\Controllers;
use  App\Models\education;
use  App\Models\contact;

use Illuminate\Http\Request;

class educationcontroller extends Controller
{
    
    public function index()
{
$educations= education::all();
$contact=contact::where('status','0')->count();
return view('admin.education.index',  [
    'educations'=> $educations,
    'contact'=>$contact
]);
}


public function create()
{
    $contact=contact::where('status','0')->count();
return view('admin.education.create',[
    'contact'=>$contact
]);
}


public function store(Request $request)
    {
        $request->validate([
            'institutionname'=>'required',
            'degree'=>'required',
            'department'=>'required',
            'startyear'=>'required',
            'endyear'=>'required'
        ]);

        education::create([
       'institution_name'=>$request->institutionname,
        'degree'=>$request->degree,
        'department'=>$request->department,
        'startyear'=>$request->startyear,
        'endyear'=>$request->endyear
        ]);
        return redirect()->route('education.index')->with('success','education info upload succesfully');
    }




            public function show(education $education)
           {
                 return view('admin.education.show',compact('education'));
          } 


              public function edit(education $education)

              {
                $contact=contact::where('status','0')->count();
                return view('admin.education.edit',compact('education'),compact('contact'));
                }
  


                public function update(Request $request, $id)
                {
                    $request->validate([
                        'institutionname'=>'required',
                        'degree'=>'required',
                        'department'=>'required',
                        'startyear'=>'required',
                        'endyear'=>'required'
                    ]);

                $education = education::find($id);
                $education->institution_name = $request->institutionname;
                $education->degree = $request->degree;
                $education->department = $request->department;
                $education->startyear = $request->startyear;
                $education->endyear = $request->endyear;
                $education->status=$request->status;
               
            
                $education->save();
                return redirect()->route('education.index')
                ->with('status','education information Has Been updated successfully');
                }
                    

                public function destroy(education $education)
                {
                    $education->delete();
                    return redirect()->route('education.index')
                    ->with('success','Company has been deleted successfully');
                    }
                    
}
