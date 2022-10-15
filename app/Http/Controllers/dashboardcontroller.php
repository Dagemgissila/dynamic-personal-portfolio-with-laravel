<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\service;
use  App\Models\education;
use  App\Models\portfolio;
use  App\Models\gallery;
use  App\Models\testimony;
use  App\Models\contactUs;
use  App\Models\socialmedia;
use  App\Models\homesetting;
use  App\Models\blog;
use  App\Models\experience;
use  App\Models\profile;
use  App\Models\section;
use  App\Models\contact;
use App\Models\user;

class dashboardcontroller extends Controller
{
    public function index(){
        $contact=contact::where('status','0')->count();
        $blog=blog::count();
        $testimony=testimony::count();
        $service=service::count();
        $gallery=gallery::count();
        $portfolio=portfolio::count();
        $education=education::count();
        $socialmedia=socialmedia::count();
        $user=user::count();
        return view('admin.dashboard',[
            'contact'=>$contact,
            'blog'=>$blog,
            'testimony'=>$testimony,
            'service'=>$service,
            'gallery'=>$gallery,
            'portfolio'=>$portfolio,
            'education'=>$education,
            'socialmedia'=>$socialmedia,
            'user'=>$user
        ]);
    }
    

}
