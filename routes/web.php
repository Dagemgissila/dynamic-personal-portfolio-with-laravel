<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardcontroller;

use App\Http\controllers\servicecontroller;
use App\Http\controllers\educationcontroller;
use App\Http\controllers\portfoliocontroller;
use App\Http\controllers\gallerycontroller;
use App\Http\controllers\testimonycontroller;
use App\Http\controllers\contactUsController;
use App\Http\controllers\socialmediacontroller;
use App\Http\controllers\settingcontroller;
use App\Http\controllers\usercontroller;
//use App\Http\controllers\logincontroller;
use App\Http\controllers\blogcontroller;
use App\Http\controllers\experiencecontroller;
use App\Http\Controllers\aboutmeController;
use App\Http\Controllers\profilecontroller;

use App\Http\Controllers\Auth\logincontroller;
use App\Http\Controllers\Auth\registercontroller;
use App\Http\Controllers\Auth\logoutcontroller;

use App\Http\Controllers\emailsendcontroller;
use App\Http\Controllers\createaccountecontroller;
use App\Http\Controllers\sectioncontroller;
use App\Http\Controllers\ContactController;


use App\Http\Controllers\Auth\ForgotPasswordController;




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


 




Route::get('/register', function () {
    return view('admin.updatetestimony');
});




Route::get('/viewMessage/{id}',[contactController::class,'see']);
Route::get('viewBlogdetail/{id}',function($id){
    $blog=blog::find($id);
    $socialmedia=socialmedia::all();
    $profiles=profile::all()->where('status','1');
    $homesetting=homesetting::all()->where('id','4');
    return view('client.singleblog',[
        'blog'=>$blog,
        'socialmedia'=>$socialmedia,
        'profiles'=>$profiles,
        'homesetting'=>$homesetting,
    ]);

});




Route::get('/', function () {
    $homesettings=homesetting::all();
    $services=service::all()->where('status','1');
    $educations=education::all()->where('status','1');
    $portfolios=portfolio::all()->where('status','1');
    $galleries=gallery::all()->where('status','1');
    $testimonies=testimony::all()->where('status','1');

        $socialmedia=socialmedia::all();

   
    $users=user::all();
    $experiences=experience::all()->where('status','1');
   
    $profiles=profile::all()->where('status','1');
    if($users->count()){
    return view('client.index',[
        'services'=>$services,
        'educations'=>$educations,
        'portfolios'=>$portfolios,
        'galleries'=>$galleries,
        'testimonies'=> $testimonies,
     
        'homesettings'=>$homesettings,
        
        'experiences'=>$experiences,
    
        'socialmedia'=>$socialmedia,
       
      
        'profiles'=>$profiles
    ]);

    
}
    else{
        return view('auth.register');
    }


    
});



Route::get('/client/gallery',function()
{
    $galleries=gallery::all()->where('status','1');
    $profiles=profile::all()->where('status','1');
    $socialmedia=socialmedia::all();
    $homesetting=homesetting::all()->where('id','4');
    return view('client.gallery',[
        'galleries'=>$galleries,
        'socialmedia'=>$socialmedia,
        'profiles'=>$profiles,
        'homesetting'=>$homesetting
        
]);

});




Route::get('/client/blogs',function(){
    $blogs=blog::all()->where('status','1');
    $homesettings=homesetting::all()->where('id','4');
    $socialmedia=socialmedia::all();
    $profile=profile::all();

   return view('client.blog',[
   'blogs'=>$blogs,
   'homesettings'=>$homesettings,
   'socialmedia'=>$socialmedia,
   'profiles'=>$profile

   ]);

});



Route::get('/view/galleries',[gallerycontroller::class,'userview']);
Route::get('/view/project',[portfoliocontroller::class,'userview']);













Route::post('/contactme',[contactController::class,'store'])->name('contactme');

Route::get('/contactme',[contactController::class,'index'])->middleware('auth');


Route::post('/register',[registercontroller::class,'store'])->name('register');

Route::get('/register', function () {
    return view('admin.updatetestimony');
});

Route::post('/login',[logincontroller::class,'store'])->name('login');
Route::get('/login',[logincontroller::class,'index']);

Route::post('/blog',[blogcontroller::class,'store'])->name('blog');
Route::get('/blog',[blogcontroller::class,'index'])->middleware('auth');

Route::get('/logout',[logoutcontroller::class,'store'])->name('logout');





Route::resource('testimony', testimonycontroller::class)->middleware('auth');
Route::resource('blog',blogcontroller::class)->middleware('auth');
Route::resource('education',educationcontroller::class)->middleware('auth');
Route::resource('gallery',gallerycontroller::class)->middleware('auth');
Route::resource('experience',experiencecontroller::class)->middleware('auth');
Route::resource('portfolio',portfoliocontroller::class)->middleware('auth');
Route::resource('service',servicecontroller::class)->middleware('auth');
Route::resource('createaccounte',createaccountecontroller::class)->middleware('auth');
Route::resource('socialmedia',socialmediacontroller::class)->middleware('auth');
Route::resource('homesetting',settingcontroller::class)->middleware('auth');

Route::resource('profile',profilecontroller::class)->middleware('auth');
Route::post('/sendemail/send',[sendemailcontroller::class,'send']);

Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');
Route::get('/dashboard',[dashboardcontroller::class, 'index'])->middleware('auth');
Route::get('/changepassword',[usercontroller::class,'changepassword'])->middleware('auth');
Route::post('/changepassword',[usercontroller::class,'changePasswordPost']);




Route::post('/change-password', [App\Http\Controllers\usercontroller::class, 'updatePassword'])->name('update-password');
Route::get('/forget-password', [ForgotPasswordController::class, 'dagi'])->name('forget-password');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');











