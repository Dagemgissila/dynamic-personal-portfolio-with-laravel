<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\portfolio;
use  App\Models\contact;

class portfoliocontroller extends Controller
{

   


    public function index()
    {
    $portfolios= portfolio::all();
    $contact=contact::where('status','0')->count();
    return view('admin.portfolio.index',  [
        'portfolios'=> $portfolios,
        'contact'=>$contact
    ]);
    }
    
    
    public function create()
    {
      $contact=contact::where('status','0')->count();
    return view('admin.portfolio.create',[
      'contact'=>$contact
    ]);
    }
    
    
    public function store(Request $request){
      $request->validate([

                
      
               ]);
               $portfolio=new portfolio();
               $portfolio->projecttitle=$request->projecttitle;
               if($request->hasFile('projectimage')) {
                  $image = $request->file('projectimage');
                  $filename = $image->getClientOriginalName();
                  $image->move(public_path('uploads/gallery'), $filename);
                  $portfolio->projectimage = $request->file('projectimage')->getClientOriginalName();
               }
               $portfolio->projectdescription=$request->projectdescription;
               $portfolio->save();
               return redirect()->route('portfolio.index')->with('status','portfolio  upload succesfully');

    }
    
    
    
                public function show(portfolio $portfolio)
               {
                     return view('admin.portfolio.show',compact('portfolio'));
              } 
    
    
                  public function edit(portfolio $portfolio)
                  {
                    $contact=contact::where('status','0')->count();
                    return view('admin.portfolio.edit',compact('portfolio'),compact('contact'));
                    }
      
    
    
                    public function update(Request $request, $id)
                    {
                    
                    $portfolio = portfolio::find($id);
                    $portfolio->projecttitle = $request->projecttitle;

                    if($request->hasFile('projectimage')) {
                     $image = $request->file('projectimage');
                     $filename = $image->getClientOriginalName();
                     $image->move(public_path('uploads/gallery'), $filename);
                     $portfolio->projectimage = $request->file('projectimage')->getClientOriginalName();
                    }
                    $portfolio->status=$request->status;
                    
                    $portfolio->projectdescription = $request->projectdescription;
                  
                   $portfolio->save();
                
                  
                    return redirect()->route('portfolio.index')
                    ->with('status','portfolio  Has Been updated successfully');
                    }
                        
    
                    public function destroy(portfolio $portfolio)
                    {
                        $portfolio->delete();
                        return redirect()->route('portfolio.index')
                        ->with('status','portfolio has been deleted successfully');
                        }



}
