<?php

namespace App\Models;
use App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aboutme extends Model
{
    use HasFactory;
    protected $fillable=[
        'aboutTitle',
        'aboutSubTitle',
        'aboutImage',
        'aboutMeDescription',
        'phonenumber',
        'address',
        'birthdate'
    ];

    public function users(){
        
        return $this->belongsTo(user::class,'user_id');
    }
}
