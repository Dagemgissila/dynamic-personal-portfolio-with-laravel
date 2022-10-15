<?php

namespace App\Models;
use App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $fillable=[
          'topic',
          'topic',
          'image',
          'content',

    ];

    public function users(){
        return $this->belongsTo(user::class,'user_id');
    }
}
