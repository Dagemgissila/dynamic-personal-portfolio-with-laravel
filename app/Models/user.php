<?php

namespace App\Models;
use App\Models\blog;
use App\Models\profile;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class user extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable=[
          'fullname',
          'email',
          'password',
          'role'

    ];

     public function blogs(){
        return $this->hasMany(blog::class);
    }
   
    public function profiles(){
        return $this->hasOne(profile::class);
     }
     
}
